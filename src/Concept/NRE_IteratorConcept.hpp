    
    /**
     * @file NRE_IteratorConcept.hpp
     * @brief Declaration of Core's API's Concept
     * @author Louis ABEL
     * @date 15/09/2020
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once
    
    #include "../Core/Traits/NRE_IteratorTraits.hpp"
    
    /**
    * @namespace NRE
    * @brief The NearlyRealEngine's global namespace
    */
    namespace NRE {
        /**
         * @namespace Concept
         * @brief Concept's API
         */
        namespace Concept {
            namespace Detail {
                /**
                 * @interface IndirectlyReadable
                 * @brief Define an indirectly readable type through operator* like pointer or input iterator
                 */
                template <class T>
                concept IndirectlyReadable = requires (const T t) {
                    typename Core::IteratorValueT<T>;
                    typename Core::IteratorReferenceT<T>;
                    typename Core::IteratorRValueReferenceT<T>;
                    { *t } -> SameAs<Core::IteratorReferenceT<T>>;
                    { std::ranges::iter_move(t) } -> SameAs<Core::IteratorRValueReferenceT<T>>;
                } && CommonReferenceWith<Core::IteratorReferenceT<T>&&, Core::IteratorValueT<T>&>
                  && CommonReferenceWith<Core::IteratorReferenceT<T>&&, Core::IteratorRValueReferenceT<T>&&>
                  && CommonReferenceWith<Core::IteratorReferenceT<T>&&, Core::IteratorValueT<T> const&>;
            }
            
            /**
             * @interface IndirectlyReadable
             * @brief Define an indirectly readable type through operator* like pointer or input iterator
             */
            template <class T>
            concept IndirectlyReadable = Detail::IndirectlyReadable<Core::RemoveCVReferenceT<T>>;
            
            /**
             * @interface
             * @brief Define an iterator type T which can be indirectly writed by a type Value through operator*
             */
            template <class T, class Value>
            concept IndirectlyWritable = requires (T&& t, Value&& v) {
                *t = std::forward<Value>(v);
                *std::forward<T>(t) = std::forward<Value>(v);
                const_cast <const Core::IteratorReferenceT<T>&&>(*t) = std::forward<Value>(v);
                const_cast <const Core::IteratorReferenceT<T>&&>(*std::forward<T>(t)) = std::forward<Value>(v);
            };
            
        }
        /**
         * @namespace Core
         * @brief Core's API
         */
        namespace Core {
            /** Compute the common reference between the the reference type and a reference on the value type of a given type */
            template <Concept::IndirectlyReadable T>
            using IteratorCommonReferenceT = CommonReferenceT<IteratorReferenceT<T>, IteratorValueT<T>&>;
        }
        namespace Concept {
            
            /**
             * @interface WeaklyIncrementable
             * @brief Define an incrementable type without equality preserving incrementation
             */
            template <class T>
            concept WeaklyIncrementable = DefaultInitializable<T> && Moveable<T> && requires (T t) {
                typename Core::IteratorDifferenceT<T>;
                requires SignedIntegerLike<Core::IteratorDifferenceT<T>>;
                { ++t } -> SameAs<T&>;
                t++;
            };
            
            /**
             * @interface Incrementable
             * @brief Define an incrementable type with equality perserving incrementation
             */
            template <class T>
            concept Incrementable = Regular<T> && WeaklyIncrementable<T> && requires (T t) {
                { t++ } -> SameAs<T>;
            };
            
            /**
             * @interface InputOrOutputIterator
             * @brief Define a base iterator type for later input/output iterators
             */
            template <class T>
            concept InputOrOutputIterator = requires (T t) {
                { *t } -> Referenceable;
            } && WeaklyIncrementable<T>;
    

            /**
             * @interface SentinelFor
             * @brief Define a type modeling a relationship between an input/output iterator and a semiregular type whose values denote a range
             */
            template <class S, class T>
            concept SentinelFor = SemiRegular<S> && InputOrOutputIterator<T> && EqualityComparableWith<S, T>;
            
            /**
             * @interface SizedSentinelFor
             * @brief Define a type modeling a sentinel relationship between S and T and which can be subtracted to compute distance between them in constant time
             */
            template <class S, class T>
            concept SizedSentinelFor = SentinelFor<S, T> && !Core::DISABLE_SIZED_SENTINEL_FOR<Core::RemoveCVT<S>, Core::RemoveCVT<T>> && requires (T const& t, S const& s) {
                { s - t } -> SameAs<Core::IteratorDifferenceT<T>>;
                { t - s } -> SameAs<Core::IteratorDifferenceT<T>>;
            };
    
            /**
             * @interface InputIterator
             * @brief Define an input iterator supporting read and incrementation operation
             */
            template <class T>
            concept InputIterator = InputOrOutputIterator<T> && IndirectlyReadable<T> && EqualityComparable<T> && requires {
                typename Core::IteratorCategoryT<T>;
            } && DerivedFrom<Core::IteratorCategoryT<T>, Core::InputIteratorCategory>;
            
            /**
             * @interface OutputIterator
             * @brief Define an output iterator supporting write and incrementation operation
             */
            template <class T, class Value>
            concept OutputIterator = InputOrOutputIterator<T> && IndirectlyWritable<T, Value> && requires (T t, Value&& v) {
                *t++ = std::forward<Value>(v);
            };
            
            /**
             * @interface ForwardIterator
             * @brief Define a forward iterator supporting multi pass iteration
             */
            template <class T>
            concept ForwardIterator = InputIterator<T>
                    && DerivedFrom<Core::IteratorCategoryT<T>, Core::ForwardIteratorCategory>
                    && Incrementable<T>
                    && SentinelFor<T, T>;
            
            /**
             * @interface BidirectionalIterator
             * @brief Define a bidirectional iterator supporting both direction iteration
             */
            template <class T>
            concept BidirectionalIterator = ForwardIterator<T>
                    && DerivedFrom<Core::IteratorCategoryT<T>, Core::BidirectionalIteratorCategory>
                    && requires (T t) {
                        { --t } -> SameAs<T&>;
                        { t-- } -> SameAs<T>;
                    };
            
            /**
             * @interface RandomAccessIterator
             * @brief Define a random access iterator supporting constant time distant iteration
             */
            template <class T>
            concept RandomAccessIterator = BidirectionalIterator<T>
                    && DerivedFrom<Core::IteratorCategoryT<T>, Core::RandomAccessIteratorCategory>
                    && TotallyOrdered<T>
                    && SizedSentinelFor<T, T>
                    && requires (T i, const T j, const Core::IteratorDifferenceT<T> n) {
                        { i += n } -> SameAs<T&>;
                        { j +  n } -> SameAs<T>;
                        { n +  j } -> SameAs<T>;
                        { i -= n } -> SameAs<T&>;
                        { j -  n } -> SameAs<T>;
                        {  j[n]  } -> SameAs<Core::IteratorReferenceT<T>>;
                    };
            
            /**
             * @interface ContiguousIterator
             * @brief Define a contiguous iterator, a refined version of random access iterator with contiguous storage constraints
             */
            template <class T>
            concept ContiguousIterator = RandomAccessIterator<T>
                    && DerivedFrom<Core::IteratorCategoryT<T>, Core::ContiguousIteratorCategory>
                    && Core::IsLValueReferenceV<Core::IteratorReferenceT<T>>
                    && SameAs<Core::IteratorValueT<T>, Core::RemoveCVReferenceT<Core::IteratorReferenceT<T>>>
                    && requires (T const& t) {
                        { std::to_address(t) } -> SameAs<Core::AddPointerT<Core::IteratorReferenceT<T>>>;
                    };
        }
        namespace Core {
            /**
             * Return an iterator to the beginning of the given container
             * @param t the object to query a begin iterator
             * @return the corresponding iterator
             */
            template <class T> requires requires (T& t) {
                { t.begin() };
            }
            constexpr Concept::InputOrOutputIterator auto begin(T& t) -> decltype(t.begin()) {
                return t.begin();
            }
    
            /**
             * Return a const iterator to the beginning of the given container
             * @param t the object to query a begin iterator
             * @return the corresponding iterator
             */
            template <class T> requires requires (T const& t) {
                { t.begin() };
            }
            constexpr Concept::InputOrOutputIterator auto begin(T const& t) -> decltype(t.begin()) {
                return t.begin();
            }
    
            /**
             * Return an iterator to the beginning of an array
             * @param t the array to query a begin iterator
             * @return the corresponding iterator
             */
            template <class T, SizeType N>
            constexpr T* begin(T (&array)[N] ) noexcept {
                return addressOf(array[0]);
            }
    
            /**
             * Return a const iterator to the beginning of the given container or array
             * @param t the object to query a begin iterator
             * @return the corresponding iterator
             */
            template <class T> requires requires (T const& t) {
                { begin(t) };
            }
            constexpr Concept::InputOrOutputIterator auto cbegin(T const& t) noexcept(noexcept(begin(t))) -> decltype(begin(t)) {
                return begin(t);
            }
        }
        namespace Core {
            
            /** Helper to access T's iterator type */
            template <class T>
            using IteratorT = decltype(begin(std::declval<T&>()));
            
            /**
             * Return an iterator to the end of the given container
             * @param t the object to query an end iterator
             * @return the corresponding iterator
             */
            template <class T> requires requires (T& t) {
                { t.end() };
            }
            constexpr Concept::SentinelFor<IteratorT<T>> auto end(T& t) -> decltype(t.end()) {
                return t.end();
            }

            /**
             * Return a const iterator to the end of the given container
             * @param t the object to query an end iterator
             * @return the corresponding iterator
             */
            template <class T> requires requires (T const& t) {
                { t.end() };
            }
            constexpr Concept::SentinelFor<IteratorT<T>> auto end(T const& t) -> decltype(t.end()) {
            return t.end();
            }
        
        
            /**
             * Return an iterator to the end of an array
             * @param t the array to query an end iterator
             * @return the corresponding iterator
             */
            template <class T, SizeType N>
            constexpr T* end(T (&array)[N]) noexcept {
                return addressOf(array[0]) + N;
            }
        
            /**
             * Return a const iterator to the end of the given container or array
             * @param t the object to query an end iterator
             * @return the corresponding iterator
             */
            template <class T> requires requires (T const& t) {
                { t.end() };
            }
            constexpr Concept::SentinelFor<IteratorT<T>> auto cend(T const& t) noexcept(noexcept(end(t))) -> decltype(end(t)) {
                return end(t);
            }

            /** Helper to access T's sentinel type */
            template <class T>
            using SentinelT = decltype(end(std::declval<T&>()));
            
            /** Helper to access T's iterator's difference type */
            template <class T>
            using RangeDifferenceT = IteratorDifferenceT<IteratorT<T>>;
            
            /** Helper to access T's iterator's value type */
            template <class T>
            using RangeValueT = IteratorValueT<IteratorT<T>>;
            
            /** Helper to access T's iterator's reference type */
            template <class T>
            using RangeReferenceT = IteratorReferenceT<IteratorT<T>>;
            
            /** Helper to access T's iterator's r-value reference type */
            template <class T>
            using RangeRValueReferenceT = IteratorRValueReferenceT<IteratorT<T>>;
        }
        namespace Concept {
    
            /**
             * @interface Range
             * @brief Define a base range with an input or output begin iterator and an end sentinel
             */
            template <class T>
            concept Range = requires (T& t) {
                Core::begin(t);
                Core::end(t);
            };
    
            /**
             * @interface OutputRange
             * @brief Define an output range with an output begin iterator and an end sentinel
             */
            template <class R, class T>
            concept OutputRange = Range<R> && OutputIterator<Core::IteratorT<R>, T>;
    
            /**
             * @interface InputRange
             * @brief Define an input range with an input begin iterator and an end sentinel
             */
            template <class T>
            concept InputRange = Range<T> && InputIterator<Core::IteratorT<T>>;
    
            /**
             * @interface ForwardRange
             * @brief Define a forward range with a forward begin iterator and an end sentinel
             */
            template <class T>
            concept ForwardRange = InputRange<T> && ForwardIterator<Core::IteratorT<T>>;
    
            /**
             * @interface BidirectionalRange
             * @brief Define a bidirectional range with a bidirectional begin iterator and an end sentinel
             */
            template <class T>
            concept BidirectionalRange = ForwardRange<T> && BidirectionalIterator<Core::IteratorT<T>>;
    
            /**
             * @interface RandomAccessRange
             * @brief Define a random access range with a random access begin iterator and an end sentinel
             */
            template <class T>
            concept RandomAccessRange = BidirectionalRange<T> && RandomAccessIterator<Core::IteratorT<T>>;
    
            /**
             * @interface ContiguousRange
             * @brief Define a contiguous range with a random access begin iterator and an end sentinel
             */
            template <class T>
            concept ContiguousRange = RandomAccessRange<T> && ContiguousIterator<Core::IteratorT<T>>;
            
        }
    }
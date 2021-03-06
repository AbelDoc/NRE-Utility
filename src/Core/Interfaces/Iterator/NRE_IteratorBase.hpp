    
    /**
     * @file NRE_IteratorBase.hpp
     * @brief Declaration of Core's API's Interface : IteratorBase
     * @author Louis ABEL
     * @date 20/10/2019
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once

    #include "../NRE_StaticInterface.hpp"
    
    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Core
         * @brief Core's API
         */
        namespace Core {
            
            /**
             * @class InputIterator
             * @brief Used in IteratorTraits to detect InputIterator category
             */
            struct InputIterator {
                /** STL compatibility */
                using iterator_category = std::input_iterator_tag;
            };
            /**
             * @class OutputIterator
             * @brief Used in IteratorTraits to detect OutputIterator category
             */
            struct OutputIterator {
                /** STL compatibility */
                using iterator_category = std::output_iterator_tag;
            };
            /**
             * @class ForwardIterator
             * @brief Used in IteratorTraits to detect ForwardIterator category
             */
            struct ForwardIterator : InputIterator {
                /** STL compatibility */
                using iterator_category = std::forward_iterator_tag;
            };
            /**
             * @class BidirectionalIterator
             * @brief Used in IteratorTraits to detect BidirectionalIterator category
             */
            struct BidirectionalIterator : ForwardIterator {
                /** STL compatibility */
                using iterator_category = std::bidirectional_iterator_tag;
            };
            /**
             * @class RandomAccessIterator
             * @brief Used in IteratorTraits to detect RandomAccessIterator category
             */
            struct RandomAccessIterator : BidirectionalIterator {
                /** STL compatibility */
                using iterator_category = std::random_access_iterator_tag;
            };
            /**
             * @class InOutForwardIterator
             * @brief Used in IteratorTraits to detect ForwardIterator category allowing Output operation
             */
            struct InOutForwardIterator : ForwardIterator, OutputIterator {
                /** STL compatibility */
                using iterator_category = std::forward_iterator_tag;
            };
            /**
             * @class InOutBidirectionalIterator
             * @brief Used in IteratorTraits to detect BidirectionalIterator category allowing Output operation
             */
            struct InOutBidirectionalIterator : BidirectionalIterator, OutputIterator {
                /** STL compatibility */
                using iterator_category = std::bidirectional_iterator_tag;
            };
            /**
             * @class InOutRandomAccessIterator
             * @brief Used in IteratorTraits to detect RandomAccessIterator category allowing Output operation
             */
            struct InOutRandomAccessIterator : RandomAccessIterator, OutputIterator {
                /** STL compatibility */
                using iterator_category = std::random_access_iterator_tag;
            };
    
    
    
            /**
             * @class IsIterator
             * @brief Detect if the given template paramter is either an InputIterator or an OutputIterator or directly iterable pointer
             */
            template <class It>
            struct IsIterator : std::disjunction<std::is_base_of<OutputIterator, It>, std::is_base_of<InputIterator, It>> {
            };
            /**
             * @class IsIterator
             * @brief Detect if the given template paramter is either an InputIterator or an OutputIterator or directly iterable pointer
             */
            template <class T>
            struct IsIterator<T*> : std::true_type {
            };
            /**
             * @class IsIterator
             * @brief Detect if the given template paramter is either an InputIterator or an OutputIterator or directly iterable pointer
             */
            template <class T>
            struct IsIterator<const T*> : std::true_type {
            };
            /**
             * @class IsInputIterator
             * @brief Detect if the given template paramter is an InputIterator
             */
            template <class It>
            struct IsInputIterator : std::is_base_of<InputIterator, It> {
            };
            /**
             * @class IsOutputIterator
             * @brief Detect if the given template paramter is an OutputIterator
             */
            template <class It>
            struct IsOutputIterator : std::is_base_of<OutputIterator, It> {
            };
            /**
             * @class IsBidirectionalIterator
             * @brief Detect if the given template paramter is an BidirectionalIterator
             */
            template <class It>
            struct IsBidirectionalIterator : std::is_base_of<BidirectionalIterator, It> {
            };
            /**
             * @class IsRandomAccessIterator
             * @brief Detect if the given template paramter is an RandomAccessIterator
             */
            template <class It>
            struct IsRandomAccessIterator : std::is_base_of<RandomAccessIterator, It> {
            };
    
            /** Shortcut to IsIterator inner value */
            template <class T>
            constexpr bool IsIteratorV = IsIterator<T>::value;
            /** Shortcut to IsInputIterator inner value */
            template <class It>
            constexpr bool IsInputIteratorV         = IsInputIterator<It>::value;
            /** Shortcut to IsOutputIterator inner value */
            template <class It>
            constexpr bool IsOutputIteratorV        = IsOutputIterator<It>::value;
            /** Shortcut to IsBidirectionalIterator inner value */
            template <class It>
            constexpr bool IsBidirectionalIteratorV = IsBidirectionalIterator<It>::value;
            /** Shortcut to IsRandomAccessIterator inner value */
            template <class It>
            constexpr bool IsRandomAccessIteratorV  = IsRandomAccessIterator<It>::value;
    
            /** Allow to enable a function if the given template parameter is an output iterator */
            template <class It>
            using UseIfOutputIterator        = std::enable_if_t<IsOutputIteratorV<It>>;
            /** Allow to enable a function if the given template parameter is a bidirectional iterator */
            template <class It>
            using UseIfBidirectionalIterator = std::enable_if_t<IsBidirectionalIteratorV<It>>;
            /** Allow to enable a function if the given template parameter is a random access iterator */
            template <class It>
            using UseIfRandomAccessIterator  = std::enable_if_t<IsRandomAccessIteratorV<It>>;
    
            /**
             * @class IteratorBase²
             * @brief Describe an iterator object
             */
            template <class It, class T, class Category>
            class IteratorBase {
            };
            
            /**
             * @class IteratorBase
             * @brief Describe an iterator object
             */
            template <template <class ...> class It, class T, class Category, class ... Args>
            class IteratorBase<It<Args...>, T, Category> : public StaticInterface<IteratorBase<It<Args...>, T, Category>>, public Category {
                static_assert(IsIteratorV<Category>);  /**< You must at least be an input iterator or output iterator */
                
                public :    // Traits
                    /** The iterator object */
                    using Iterator          = It<Args...>;
                    /** The iterated object */
                    using ValueType         = T;
                    /** The pointer on iterated object */
                    using Pointer           = std::conditional_t<IsOutputIteratorV<Category>, ValueType*, const ValueType*>;
                    /** The reference on iterated object */
                    using Reference         = std::conditional_t<IsOutputIteratorV<Category>, ValueType&, ValueType const&>;
                    /** The iterator difference type */
                    using DifferenceType    = std::ptrdiff_t;
                    /** STL compatibility */
                    using value_type        = ValueType;
                    /** STL compatibility */
                    using pointer           = Pointer;
                    /** STL compatibility */
                    using reference         = Reference;
                    /** STL compatibility */
                    using difference_type   = DifferenceType;
                    /** STL compatibility */
                    using iterator_category = std::conditional_t<std::is_pointer_v<T>, std::random_access_iterator_tag, typename Category::iterator_category>;
                    
                public :    // Methods
                    //## Methods ##//
                        /**
                         * @return a reference on the iterated data
                         */
                        Reference dereference() const {
                            return this->impl().dereference();
                        }
                        /**
                         * Increment the iterator position by one
                         */
                        void increment() {
                            this->impl().increment();
                        }
                        /**
                         * Decrement the iterator position by one
                         */
                        template <class K = Category, typename = UseIfBidirectionalIterator<K>>
                        void decrement() {
                            this->impl().decrement();
                        }
                        /**
                         * Move the iterator by a given number (can be negative)
                         * @param n the distance to move
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        void advance(DifferenceType n) {
                            this->impl().advance(n);
                        }
                        /**
                         * Tell the distance between the given iterator
                         * @param it the other iterator
                         * @return   the distance between it and this
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        DifferenceType distanceTo(Iterator const& it) const {
                            return this->impl().distanceTo(it);
                        }
                        /**
                         * Test if the given iterator point to the same position
                         * @param it the other iterator
                         * @return   the test's result
                         */
                        bool equal(Iterator const& it) const {
                            return this->impl().equal(it);
                        }
                        
                    //## Access Operator ##//
                        /**
                         * Dereference operator, allow access to the data
                         * @return the iterator data
                         */
                        Reference operator*() const {
                            return dereference();
                        }
                        /**
                         * Arrow dereference operator, allow access to the data
                         * @return the iterator data pointer
                         */
                        Pointer operator->() {
                            return &dereference();
                        }
    
                    //## Access Operator ##//
                        /**
                         * Return a reference on an iterated element
                         * @warning No range check performed
                         * @param   n the number of move from the current position
                         * @return    the new element reference
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        Reference operator [](DifferenceType n) const {
                            Iterator it(*this);
                            it += n;
                            return *it;
                        }
    
                    //## Increment Operator ##//
                        /**
                         * Pre increment operator, access the next element
                         * @return the reference of himself
                         */
                        Iterator& operator++() {
                            increment();
                            return this->impl();
                        }
                        /**
                         * Post increment operator, access the next element
                         * @return the iterator on the current element
                         */
                        Iterator operator++(int) {
                            It tmp(this->impl());
                            ++*this;
                            return tmp;
                        }
    
                    //## Decrement Operator ##//
                        /**
                         * Pre decrement operator, access the previous element
                         * @return the reference of himself
                         */
                        template <class K = Category, typename = UseIfBidirectionalIterator<K>>
                        Iterator& operator--() {
                            decrement();
                            return this->impl();
                        }
                        /**
                         * Post decrement operator, access the previous element
                         * @return the iterator on the current element
                         */
                        template <class K = Category, typename = UseIfBidirectionalIterator<K>>
                        Iterator operator--(int) {
                            It tmp(this->impl());
                            --*this;
                            return tmp;
                        }
    
                    //## Shortcut Operator ##//
                        /**
                         * Move the iterator by k
                         * @param k the distance to add
                         * @return the reference of himself
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        Iterator& operator +=(DifferenceType k) {
                            advance(k);
                            return *this;
                        }
                        /**
                         * Move the iterator by k
                         * @param k the distance to subtract
                         * @return the reference of himself
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        Iterator& operator -=(DifferenceType k) {
                            advance(-k);
                            return *this;
                        }
    
                    //## Arithmetic Operator ##//
                        /**
                         * Create an iterator resulting in the move of this by k
                         * @param k the distance to add
                         * @return the new iterator
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        Iterator operator +(DifferenceType k) const {
                            return Iterator(*this) += k;
                        }
                        /**
                         * Create an iterator resulting in the move of this by k
                         * @param k the distance to subtract
                         * @return the new iterator
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        Iterator operator -(DifferenceType k) const {
                            return Iterator(*this) -= k;
                        }
    
                    //## Comparison Operator ##//
                        /**
                         * Equality test between this and it
                         * @param it the other iterator
                         * @return the test result
                         */
                        bool operator==(Iterator const& it) const {
                            return this->impl().equal(it);
                        }
                        /**
                         * Inequality test between this and it
                         * @param it the other iterator
                         * @return the test result
                         */
                        bool operator!=(Iterator const& it) const {
                            return !this->impl().equal(it);
                        }
                        /**
                         * Inferior test between this and it
                         * @param it the vector to test with this
                         * @return the test's result
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        bool operator <(Iterator const& it) const {
                            return this->impl().distanceTo(it) < 0;
                        }
                        /**
                         * Superior test between this and it
                         * @param it the vector to test with this
                         * @return the test's result
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        bool operator >(Iterator const& it) const {
                            return this->impl().distanceTo(it) > 0;
                        }
                        /**
                         * Inferior or Equal test between this and it
                         * @param it the vector to test with this
                         * @return the test's result
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        bool operator <=(Iterator const& it) const {
                            return this->impl().distanceTo(it) <= 0;
                        }
                        /**
                         * Superior or Equal test between this and it
                         * @param it the vector to test with this
                         * @return the test's result
                         */
                        template <class K = Category, typename = UseIfRandomAccessIterator<K>>
                        bool operator >=(Iterator const& it) const {
                            return this->impl().distanceTo(it) >= 0;
                        }
                
            };
    
            /**
             * Create an iterator resulting in the move of it by k
             * @param k  the distance to add
             * @param it the iterator to move
             * @return the new iterator
             */
            template <template <class ...> class It, class T, class Category, class ... Args, class K = Category, typename = UseIfRandomAccessIterator<K>>
            It<Args...> operator +(std::ptrdiff_t k, IteratorBase<It<Args...>, T, Category> const& it) {
                return It<T, Args...>(it) += k;
            }
    
            /**
             * Create an iterator resulting in the move of it by k
             * @param k  the distance to subtract
             * @param it the iterator to move
             * @return the new iterator
             */
            template <template <class ...> class It, class T, class Category, class ... Args, class K = Category, typename = UseIfRandomAccessIterator<K>>
            It<Args...> operator -(std::ptrdiff_t k, IteratorBase<It<Args...>, T, Category> const& it) {
                return It<T, Args...>(it) -= k;
            }
    
            /**
             * Compute the signed distance between two iterator
             * @param it    the first iterator
             * @param other the other iterator
             * @return the iterators distance
             */
            template <template <class ...> class It, class T, class Category, class ... Args, class K = Category, typename = UseIfRandomAccessIterator<K>>
            typename IteratorBase<It<Args...>, T, Category>::DifferenceType operator -(IteratorBase<It<Args...>, T, Category> const& it, IteratorBase<It<Args...>, T, Category> const& other) {
                return it.distanceTo(other);
            }
        }
    }
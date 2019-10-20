    
    /**
     * @file NRE_StaticInterface.hpp
     * @brief Declaration of Utility's API's Object : StaticInterface
     * @author Louis ABEL
     * @date 20/10/2019
     * @copyright CC-BY-NC-SA
     */
    
    #pragma once
    
    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Utility
         * @brief Utility's API
         */
        namespace Utility {
            
            /**
             * @class StaticInterface
             * @brief Describe an object using CRTP to create static interface (static polymorphism)
             */
            template <class T, template<class> class M>
            class StaticInterface {
                public:    // Methods
                    /**
                     * @return the derived object
                     */
                    T& impl() {
                        return static_cast <T&> (*this);
                    }
                    /**
                     * @return the derived object
                     */
                    T const& impl() const {
                        return static_cast <T const&> (*this);
                    }
            };
        }
    }

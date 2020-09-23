
    /**
     * @file NRE_Main.cpp
     * @brief Test of Core's API
     * @author Louis ABEL
     * @date 13/05/2019
     * @copyright CC-BY-NC-SA
     */
    
    #include <iostream>
    #include <vector>
    
    #include "Header/NRE_Core.hpp"

    using namespace NRE;
    
    int main(int, char**) {
        
        std::cout << Concept::SameAs<int, Memory::PointerValueT<std::vector<int>>> << std::endl;
        
        return 0;
    }

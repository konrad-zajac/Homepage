//
//  main.cpp
//  perwsze
//
//  Created by Konrad Zajac on 19/11/2016.
//  Copyright © 2016 Konrad Zajac. All rights reserved.
//

#include <iostream>
using namespace std;
int main(int argc, const char * argv[])
{
    int x;
    std::cout << "insert the range: ";
    std::cin >> x;
    
    for (int first_loop=2; first_loop<x; first_loop++)
    {
        int divisible_flag = 0;

        for (int second_loop=2; second_loop<x; second_loop++)
        {
            
        if (first_loop % second_loop == 0 )
            {
                divisible_flag += 1;
                
            }
            
           
        }
    if (divisible_flag == 1)
    {
        cout << first_loop << " is a prime\n";
    }

    }
    return 0;
}

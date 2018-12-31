#!/usr/bin/python
x=input('insert the range\n')
for loop_one in range(2,x):
    is_divisible=0
    for loop_two in range(2,x):
        if loop_one%loop_two==0:
            is_divisible+= 1
    if is_divisible==1:
        print loop_one, 'is a prime number'

#include<iostream>

using namespace std;

inline int complex_function(int a, int b)
{
    int count=5, sum=0, y=1;
    for(;count>0;count--)
    {
        sum = sum + a + b;
    }

}

int main()
{
    printf("5 * %d + 5 * %d = %d\n",1,2,complex_function(1,2));
    printf("5 * %d + 5 * %d = %d\n",3,4,complex_function(3,4));
    printf("5 * %d + 5 * %d = %d\n",13,14,complex_function(13,14));
}

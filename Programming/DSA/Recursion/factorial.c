#include<stdio.h>

long int factorial(long int n)
{
    if (n==0)
    {
        return 1;
    }
    else
    {
        return n*factorial(n-1);
    }
}

int main()
{
    long int n=5;
    printf("%ld",factorial(n));
    return 0;
}


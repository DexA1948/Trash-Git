#include<stdio.h>

int sum(int n)
{
    if (n==0)
    {
        return 0;
    }
    else
    {
        return n+sum(n-1);
    }
}

int main()
{
    long int n=5;
    printf("%ld",sum(n));
    return 0;
}


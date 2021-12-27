#include<stdio.h>

void twoh(int n,char S,char D,char A)
{
    if(n==1)
    {
        printf("\nMove 1 from %c to %c\n",S,D);
        return;
    }

    twoh(n-1,S,A,D);
    printf("\nMove %d from %c to %c\n",n,S,D);
    twoh(n-1,A,D,S);
}

int main()
{
    int n=4;
    char S='A',D='C',A='B';
    twoh(n,S,D,A);
    return 0;
}

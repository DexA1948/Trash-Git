#include<stdio.h>

#define MAXX 12

int array[MAXX];

void fillarray()
{
    for(int i=0;i<MAXX;i++)
    {
        printf("\narray[%d] = ",i);
        scanf("%d",&array[i]);
    }
    return;
}

void printarray()
{
    for(int i=0;i<MAXX;i++)
    {
        printf("\narray[%d] = %d",i,array[i]);
    }
}

void bubblesort()
{

}

int main()
{
    fillarray();

    bubblesort();

    printarray();
}

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

int linearsearch(int data)
{
    for(int i=0;i<MAXX;i++)
    {
        if(array[i]==data)
        {
            return i;
        }
    }
    printf("\nNot Found\n");
    return 0;
}

int main()
{
    int data,position;
    fillarray();
    printf("\nEnter data to search\n");
    scanf("%d",&data);
    position=linearsearch(data);
    printf("\n%d\n",position);
    printf("\narray[%d] = %d",position,array[position]);
}


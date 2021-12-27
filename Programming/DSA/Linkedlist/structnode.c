#include<stdio.h>

struct node
{
    int data;
    struct node* address;
};

struct node *llptr;

struct node * append()
{
    return (struct node*)malloc(sizeof(struct node));
}

int main()
{
    int c=0,i,choice;
   while(1)
   {
    printf("\n1:newdata\n2:print\n3:exit\n");
    scanf("%d",&choice);
    llptr=append();
    switch(choice)
    {

        case 1:
                (llptr->address)=append();
                scanf("%d",&((llptr)->data));
                c=c+1;
            break;
        case 2:
            for(i=0;i<=c;i++)
            {
                printf("\n%d\n",(llptr+i)->data);
            break;
            }
        case 3:
            exit(1);
            break;

    }
   }

}

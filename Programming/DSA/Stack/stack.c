#include<stdio.h>
#include<stdlib.h>
#define CAPACITY 2

int stack[CAPACITY];
int top=-1;

void push(int item)
{
    if(top==CAPACITY-1)
        {
            printf("\nstack is full\n");
        }
    else
        {
            stack[++top]=item;
            printf("\n%d is pushed to the stack\n",item);
        }
}

int pop()
{
    if(top==-1)
        {
            printf("\nstack is empty\n");
            return 0;
        }
    else
        {
            return stack[top--];
        }
}
void peek()
{
    if(top==-1)
        {
            printf("\nstack is empty\n");
        }
    else
        {
            printf("\n%d is int the top of stack\n",stack[top]);
        }
}
void traverse()
{
    int i;

    if(top==-1)
        {
            printf("\nstack is empty\n");
        }
    else
        {
            //don't forget to use top
            for(i=top;i>=0;i--)
            {
                printf("\nstack[%d]=%d\n",i,stack[i]);
            }
        }

}

int main()
{
    int i=0,choice,item;

    while(1)
    {
        printf("\n1:To push\n2:To pop\n3:To peek\n4:To traverse\nelse:exit\n");
        scanf("%d",&choice);

        switch(choice)
        {
            case 1:
                printf("\nEnter the data to push to the stack\n");
                scanf("%d",&item);
                push(item);
                break;
            case 2:
                if(top==-1)
                    {
                        printf("\nstack is empty\n");
                        break;
                    }
                printf("\n%d is popped\n",stack[top--]);
                break;
            case 3:
                peek();
                break;
            case 4:
                traverse();
                break;
            default:
                exit(1);
        }
    }
}

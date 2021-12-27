 //enque,deque,peek,traverse,front,rear

#include<stdio.h>
#include<stdbool.h>

#define CAPACITY 4
int queue[CAPACITY];
int front=-1;
int rear=-1;

void enqueue();
void dequeue();
void peek();
void traverse();

bool isFull();
bool isEmpty();

int main()
{
    int choice;
    printf("\n1:Enqueue\n2:Dequeue\n3:Peek\n4:Traverse\nelse:exit\n");

    while(1)
    {
        printf("\nEnter choice:\t");
        scanf("%d",&choice);

        switch(choice)
        {
        case 1:
            enqueue();
            break;
        case 2:
            dequeue();
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

void enqueue()
{
    int data;
    printf("\nEnter the data to push to the Queue:\t");
    scanf("%d",&data);

    if(isFull())
    {
        printf("\nThe queue is full\n");
    }
    else
    {
        if(isEmpty())
        {
            front++;
            rear++;
            queue[rear]=data;
            printf("\n%d is added to the queue\n",data);
        }
        else
        {
            rear++;
            queue[rear]=data;
            printf("\n%d is added to the queue\n",data);
        }
    }


}

void dequeue()
{
    int i;

    if (isEmpty())
    {
        printf("\nQueue is empty\n");
    }
    else if (front==rear)
    {
        printf("\nQueue[%d]=%d Dequeued\n",rear,queue[rear]);
        front--;
        rear--;
    }
    else
    {
        printf("\nQueue[0]=%d Dequeued\n",queue[0]);
        for (i=1;i<=rear;i++)
        {
            queue[i-1]=queue[i];
        }
        rear--;
    }
}
void peek()
{
    if(isEmpty())
    {
        printf("\nQueue is empty\n");
    }
    else
    {
        printf("\nQueue[0]=%d\n",queue[0]);
    }
}
void traverse()
{
    if(isEmpty())
    {
        printf("\nQueue is empty\n");
    }
    else
    {
        printf("\nTraverse : The data in the queue are : \n");
        for(int i=rear;i>=front;i--)
        {
            printf(" %d --> ",queue[i]);
        }
    }
}


bool isFull()
{
    if (rear==CAPACITY-1)
        return true;
    else
        return false;
}

bool isEmpty()
{
    if (front<0)
        return true;
    else
        return false;
}

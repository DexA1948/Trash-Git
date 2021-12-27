#include<stdio.h>
#include<stdlib.h>
void append();
void display();
int length();

struct node
{
    int data;
    struct node* address;     // pointer is of that type , what it is pointing
};

struct node* head=NULL;    //at first there is no any node so the value of head pointer is null.i.e it points nothing


int main()
{

    int choice;
    while(1)
    {
        printf("\n1:To append\n2:To find length\n3:To display\n4:To exit\n");
        scanf("%d",&choice);

        switch(choice)
        {
        case 1:
            append();
            break;  //append function adds a new node  at the end of the list

        case 2:
            length();
            break;
        case 3:
            display();
            break;
        case 4:
            exit(1);
        }
    }


}
void append()
{
    struct node* temp;

    temp=(struct node*)malloc(sizeof(struct node));

    printf("\nEnter the data to append to the list:\n");
    scanf("%d",&temp->data);
    printf("\n%d is appended to the list.\n",temp->data); //the last node is determined by checking the node;if the node is not pointing anything or NULL then its the last node in the list

    temp->address=NULL;

    if(head==NULL)
        {
            head=temp;
        }
    else
        {
            struct node* ptr;
            ptr=head;
            while(ptr->address!=NULL)
                {
                    ptr=ptr->address;
                }
            ptr->address=temp;
        }
}

int length()
{
    if(head==NULL)
    {
        printf("the list is empty!!\n\n");
        return 0;
    }
    else
    {
        struct node*ptr;
        ptr=head;
        int counter=1;
        while(ptr->address!=NULL)
        {
            ptr=ptr->address;
            counter=counter+1;
        }
        return counter;
    }
}

void display()
{
    int i=0;

    if(head == NULL)
        {
            printf("\nNothing to Display,the list is empty\n\n");
        }
    else
        {
            struct node* ptr;
            ptr = head;
            int a=length();

            printf("The data in the list are: \n\n ");

            for(i=0;i<a;ptr=ptr->address)
            {
                printf("%d-->", ptr->data);
            }

            printf("\n \n");
        }

}

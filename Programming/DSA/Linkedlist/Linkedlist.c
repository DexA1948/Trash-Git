#include<stdio.h>
#include<stdlib.h>
void append();
void display();
int length();
void insertion(int);
void del(int);

struct node
{
    int data;
    struct node* address;     // pointer is of that type , what it is pointing
};

struct node* head=NULL;    //at first there is no any node so the value of head pointer is null.i.e it points nothing


int main()
{

    int choice,position;
    printf("\n1:To append\n2:To find length\n3:To display\n4:To insert\n5:To delete\nelse:exit\n");

    while(1)
    {
        printf("\nEnter Choice:\t");
        scanf("%d",&choice);

        switch(choice)
        {
        case 1:
            append();
            break;  //append function adds a new node  at the end of the list

        case 2:
            printf("There are %d nodes\n",length());
            break;
        case 3:
            display();
            break;
        case 4:
            printf("Please enter the position\n");
            scanf("%d",&position);
            insertion(position);
            break;
        case 5:
            printf("Please enter the position\n");
            scanf("%d",&position);
            del(position);
            break;
        default:
            exit(1);
        }
    }


}
void append()
{
    struct node* temp;

    temp=(struct node*)malloc(sizeof(struct node));

    printf("Enter the data to append to the list:\n");
    scanf("%d",&temp->data);
    printf("%d is appended to the list.\n",temp->data); //the last node is determined by checking the node;if the node is not pointing anything or NULL then its the last node in the list

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
        printf("the list is empty!!\n");
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

            printf("The data in the list are:\n");

            for(i=0;i<a;i++)
            {
                printf("%d-->", ptr->data);
                ptr=ptr->address;
            }

            printf("\n");
        }

}
void insertion(int p)
{
    if (p>length()+1)
        {
            printf("\nEnter valid position\n");
        }
    else if (p==length()+1)
        {
            append();
        }
    else {
                struct node* temp;
                temp=(struct node*)malloc(sizeof(struct node));

                printf("Enter the data to insert to the list:\n");
                scanf("%d",&temp->data);
                printf("%d is appended to the list.\n",temp->data);

                if(p==1)
                    {
                        temp->address=head;
                        head=temp;
                    }
                else if(p>1 && p<=length())
                    {
                        struct node* ptr=head;

                        for(int i=1;i<p-1;i++)
                        {
                            ptr=ptr->address;
                        }

                        temp->address=ptr->address;
                        ptr->address=temp;
                    }
            }
}


void del(int position)
{
    if(position>length())
    {
        printf("Invalid Input");
    }
    else
    {
        if(position==1)
        {
            struct node* ptr;
            ptr=head;
            head=ptr->address;
            free(ptr);
            printf("The node of %d position is deleted.\n",position);
        }
        else if(position==length())
        {
            struct node* temp;
            struct node* ptr=head;

            for(int i=1;i<position-1;i++)
            {
                ptr=ptr->address;
            }

            temp=ptr->address;
            ptr->address=NULL;

            free(temp);

            printf("The node of %d position is deleted.\n",position);
        }
        else if(position>1 && position<length())
        {
            struct node* temp;
            struct node* ptr=head;

            for(int i=1;i<position-1;i++){
            ptr=ptr->address;
            }

            temp=ptr->address;
            ptr->address=temp->address;

            free(temp);
            printf("The node of %d position is deleted.\n",position);
        }
    }
}

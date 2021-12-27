#include<stdio.h>
#include<stdlib.h>

struct node
{
    struct node* laddress;
    struct node* raddress;

    int data;
};

struct node* root=NULL;

void insert(int data);
void del(int data);
void finda(int data);

int main()
{
    int data,choice;

    while(1)
    {
        printf("\n1:To insert\n2:To delete\n3:To find and show branches\nElse:Exit\n");
        scanf("%d",&choice);

        switch(choice)
        {
        case 1:
            printf("\nEnter data:\n");
            scanf("%d",&data);
            insert(data);
            break;
        case 2:
            printf("\nEnter data:\n");
            scanf("%d",&data);
            del(data);
            break;
        case 3:
            printf("\nEnter data:\n");
            scanf("%d",&data);
            finda(data);
            break;
        default:
            exit(1);
        }
    }
    return 0;
}


void insert(int data)
{
    struct node* temp;
    temp=(struct node*)malloc(sizeof(struct node));

    temp->laddress=NULL;
    temp->raddress=NULL;
    temp->data=data;

    printf("\n%d is appended\n",data);

    if (root==NULL)
    {
        root=temp;
    }
    else
    {
        struct node* parent;
        struct node* current;

        current=root;

        while(current)
        {
            parent=current;

            if(temp->data > current->data)
            {
                current=current->raddress;
            }
            else
            {
                current=current->laddress;
            }
        }

        if(temp->data > parent->data)
        {
            parent->raddress=temp;
        }
        else
        {
            parent->laddress=temp;
        }
    }

    return;

}

void del(int data)
{
    struct node* parent;
    struct node* current;

    current=root;

    while(current->data!=data)
    {
        parent=current;

        if(data > current->data)
        {
            current=current->raddress;
        }
        else
        {
            current=current->laddress;
        }
    }

    printf("\n%d is found\n",current->data);

    if(current->laddress==NULL && current->raddress==NULL)
    {
        if(current->data > parent->data)/*or use if(current==parent->raddress)*/
        {
            parent->raddress=NULL;
        }
        else
        {
            parent->laddress=NULL;
        }

        free(current);
        printf("\nDeleted\n");
    }
    //else if(current->laddress==NULL && cuurent->raddress!=NULL) make 2 conditions
    else if(current->laddress==NULL || current->raddress==NULL)
    {
        if(current->data > parent->data)/*current==parent->raddress*/
        {
            if(current->laddress==NULL)
            {
                parent->raddress=current->raddress;
            }
            else
            {
                parent->raddress=current->laddress;
            }
        }
        else
        {
            if(current->laddress==NULL)
            {
                parent->laddress=current->raddress;
            }
            else
            {
                parent->laddress=current->laddress;
            }
        }

        free(current);
        printf("\nDeleted\n");
    }
    else
    {
        struct node* subparent;
        struct node* subcurrent;

        subcurrent=current->raddress;

        if(subcurrent->laddress==NULL)
        {
            if(current==parent->raddress)
            {
                parent->raddress=subcurrent;
            }
            else
            {
                parent->laddress=subcurrent;
            }

            subcurrent->laddress=current->laddress;

            free(current);
            printf("\nDeleted\n");

        }
        else
        {
            while(subcurrent->laddress!=NULL)
            {
                subparent=subcurrent;
                subcurrent=subcurrent->laddress;
            }

            if(subcurrent->raddress!=NULL)
            {
                subparent->laddress=subcurrent->raddress;
            }
            else
            {
                subparent->laddress=NULL;
            }

            if(current==parent->raddress)
            {
                parent->raddress=subcurrent;
            }
            else
            {
                parent->laddress=subcurrent;
            }

            subcurrent->laddress=current->laddress;
            subcurrent->raddress=current->raddress;

            free(current);
            printf("\nDeleted\n");
            }
    }
}

void finda(int data)
{
    struct node* parent;
    struct node* current;

    current=root;

    while(current->data!=data)
    {
        parent=current;

        if(data > current->data)
        {
            current=current->raddress;
        }
        else
        {
            current=current->laddress;
        }
    }

    printf("\n%d is found\n",current->data);
    if(current->laddress==NULL)
    {
        printf("\nON left = NTG\n");
    }
    else
    {
        printf("\nON left = %d\n",current->laddress->data);
    }
    if(current->raddress==NULL)
    {
        printf("\nON right = NTG\n");
    }
    else
    {
        printf("\nON right = %d\n",current->raddress->data);
    }
}

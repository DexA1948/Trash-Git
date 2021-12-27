#include<stdio.h>

#define capacity 5

int main(){
    int A[capacity]={1,3,5,2,4};
    int temp,i,j;

    for(i=0;i<(capacity-1);i++){
        for(j=0;j<(capacity-1);j++){
            if(A[j]>A[j+1]){
                temp=A[(j+1)];
                A[j+1]=A[j];
                A[j]=temp;
            }
        }
    }
    for(i=0;i<capacity;i++){
        printf("\nAns : %d \n",A[i]);
    }
}

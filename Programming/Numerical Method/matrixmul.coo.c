void multiply(int n,double a[10][10],double b[10])
{
    int i,j;
    double sum;

    for(i=0;i<n;i++)
    {
        sum=0;
        for(j=0;j<n;j++)
        {
            sum = sum + (a[i][j]*b[j]);
        }
        printf("\n %lf ",sum);
    }
}


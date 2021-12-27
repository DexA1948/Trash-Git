#include <stdio.h>
#include<math.h>
int main()
{  long long n;
   int count=0;
   printf("Enter a number");
   scanf("%d", &n);
  count=(n==0);
  count=(log10(n)+1)  ;

  printf("No. of digits: %d", count);
}

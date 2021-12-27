#include<stdio.h>

int main()
{
int blank,tab,nl;
char c;
blank=tab=nl=0;;


c=getchar();
if(c==' '){blank++;}
else if(c=='\t'){tab++;}
else if(c=='\n'){nl++;}

printf("Number of blank is %d\n Number of tab is %d\n Number of Newline is %d\n", blank, tab, nl);
}

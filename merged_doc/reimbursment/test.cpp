#include<iostream>
#include<string.h>
using namespace std;


int powerOfTwo(int Number)
{
	if ((Number & (Number-1)) == 0) 
	{
		return 1;
	}
	else 
	{
		return -1;	
	}
}

int main()
{
	cout<<powerOfTwo(32);
	cout<<powerOfTwo(39);
	return 0;
}
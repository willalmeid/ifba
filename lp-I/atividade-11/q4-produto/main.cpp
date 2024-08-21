#include <iostream>
using namespace std;

int main(){
	int a=1, b=10;
	double produto=1;
	
	while(a<=b){
		cout<< " \n"<<a;
		produto=produto*a;
		a++;		
	}
	cout<<"\n O produto eh: "<<produto;
}

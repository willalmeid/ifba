#include <iostream>
using namespace std;

int main(){
	int a=0, b=10;
	double qtd=0, soma=0;
	
	while(a<=b){
		cout<< " \n"<<a;
		soma=soma+a;
		qtd++;
		a++;	
	}
	cout<<"\n A media eh: "<<soma/qtd;
}


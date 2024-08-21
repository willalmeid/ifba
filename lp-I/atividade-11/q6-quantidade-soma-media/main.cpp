#include <iostream>
using namespace std;

int main(){
	int n, qtd=0;
	double soma=0;
	
	cout<<"\nDigite um numero (0 para parar): ";
	cin>>n;
	
	while(n!=0){
		qtd++;
		soma=soma+n;
		cout<< "\nDigite um numero (0 para parar): ";
		cin>>n;
	}
	cout<< "\n A quantidade foi: "<<qtd;
	cout<< "\n A soma foi: "<<soma;
	cout<< "\n A media foi: "<<soma/qtd;
}

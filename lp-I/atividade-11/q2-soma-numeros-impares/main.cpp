#include <iostream>
using namespace std;

int main(){
	int a, b, soma=0;
	
	cout<<"informe um numero IMPAR \n";
	cin>>a;
	cout<<"informe um numero maior que o anterior\n";
	cin>>b;
	
	while(a<b){
		cout<< " \n"<<a;
		soma=soma+a;
		a=a+2;	
	}
	cout<< "\n a soma eh: "<<soma;
}

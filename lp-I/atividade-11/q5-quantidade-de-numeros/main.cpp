#include <iostream>
using namespace std;

int main(){
	int n, int qtd=0;
	
	cout<<"\nDigite um numero (0 para parar): ";
	cin>>n;
	
	while(n!=0){
		qtd++;
		cout<< "\nDigite um numero (0 para parar): ";
		cin>>n;
	}
	cout<< "\n quantidade foi: "<<qtd;
}

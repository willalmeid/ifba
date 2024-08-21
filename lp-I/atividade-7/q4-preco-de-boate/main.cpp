#include <iostream> 
using namespace std; 

main( ) { 

	int idade, sexo; 

	cout<<"informe o idade: "; 
	cin>>idade; 
	cout<<"informe o sexo: "; 
	cin>>sexo; 
	
	if(sexo==1){ 
		if(idade>25){
			cout<<"Preco eh 50 reais"; 	
		}
		
		if(idade<25 && idade>21){
			cout<<"Preco eh 30 reais";	
		}
		
		if(idade<21 && idade>18){
			cout<<"Preco eh 20 reais";	
		}
		
		if(idade<18) {
			cout<<"Nao pode entrar";	
		}
	
	} 

	if(sexo==2){ 
	
		if(idade>25){
			cout<<"Preco eh 40 reais"; 	
		}
		
		if(idade<25 && idade>21){
			cout<<"Preco eh 25 reais";	
		}
		
		if(idade<21 && idade>18) {
			cout<<"Preco eh 15 reais";	
		} 
		
		if(idade<18){
			cout<<"Nao pode entrar";	
		}
	
	} 

}

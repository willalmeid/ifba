#include <iostream>
using namespace std;

main( ) {
	
	int opcao;
	float salario, soma;
	
	cout<< "1. Imposto \n";
	cout<< "2. Novo salario \n";
	cout<< "3. Classificacao \n";
	cout<< "\t Digite opcao desejada. \n";
	cin>>opcao;
	cout<< "informe o salario \n";
	cin>>salario;

	switch (opcao){
		case 1:
		 	if (salario<500){
			 	soma=salario*0.05;
			 	cout<< "O valor do imposto eh: "<<soma;
			} else if (salario>500 && salario<850){
			 	cout<<"O valor do imposto eh:"<<soma;
				soma=salario*0.1;
			 	cout<< "O valor do imposto eh: "<<soma;
			} else {
			 	soma=salario*0.15;
			 	cout<< "O valor do imposto eh: "<<soma;
			}
		 	break;
		case 2:
			if (salario>1500){
			 	soma=salario+25;
			 	cout<< "O valor do novo salario eh: "<<soma;
			} else if (salario>750 && salario<1500){
			 	soma=salario+50;
			 	cout<< "O valor do novo salario eh: "<<soma;
			} else {
			 	soma=salario+100;
			 	cout<< "O valor do novo salario eh: "<<soma;
			}
		 	break;
		default:
			if (salario>750){
				cout<<"Bem remunerado";
			} else if (salario<750){
				cout<<"Mal remunerado";
			}
	}
}

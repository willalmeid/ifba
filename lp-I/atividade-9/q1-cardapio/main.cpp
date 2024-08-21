#include <iostream>
using namespace std;

main( ) {

	int codigo, quantidade;
	float soma, pago, troco;
	
	cout<<"Especificacao    Codigo    Preco \n";
	cout<<  "Bauru         101     1.10 \n";
	cout<<    "Hamburguer     103     1.20 \n";
	cout<<    "Cheeseburguer     104     1.30 \n";
	cout<<    "Refrigerante     105     1.00 \n\n";
	
	cout<< "informe o codigo \n";
	cin>> codigo;
	cout<< "informe a quantidade \n";
	cin>> quantidade;
	
	switch (codigo){
		case 101:
			soma=1.10 * quantidade;
			cout<< "O valor a pagar eh= "<<soma;
			break;
		case 103:
			soma=1.20 * quantidade;
			cout<< "O valor a pagar eh= \n"<<soma;
			break;
		case 104:
			soma=1.30 * quantidade;
			cout<< "O valor a pagar eh= \n"<<soma;
			break;
		case 105:
			soma=1.00 * quantidade;
			cout<< "O valor a pagar eh= "<<soma;
			break;
		default:
			cout<< "O codigo inserido foi invalido";
	}
	
	cout<<"\ninforme o valor pago \n";
	cin>>pago;
	
	if(pago<soma){
		cout<< "valor invalido";	
	}
	else if (pago==soma){
		cout<< "esta certinho, obrigado pela preferencia.";
	} else {
		troco=pago-soma;
	}

	cout<< "Aqui esta seu troco: "<<troco;
	cout<< "\n\n\tObrigado pela Preferencia";
}

#include <iostream>
using namespace std;

int soma (int x, int y){
	int temperatura=0;
	float resultadoc, resultadof;
	return resultadoc;
	return resultadof;
}

main(){
	int temperatura, converter=0;
	float resultadoc, resultadof, resultado;
	
	cout<<"\t\t ************************* TEMPERATURA **************************";
	cout<<"\n\t\t 1 - Converter para escala Celsius 2 - Converter para Fahrenheit";
	cout<<"\n\t\t **************************************************************** \n";
	cout<<"Escolha uma opcao:";
	cin>>converter;
	switch (converter){
		case 1:
			cout<<"Digite a temperatura: ";
			cin>>temperatura;
			resultadoc = 5.0/9.0 * temperatura-32.0;
			cout<<resultadoc;
			break;
		case 2:
			cout<<"Digite a temperatura: ";
			cin>>temperatura;
			resultadof = 9.0/5.0 * temperatura + 32.0;
			cout<<resultadof;
			break;
		default:
			cout<<"Informacoes erradas";
	}
}

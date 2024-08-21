#include <iostream>
using namespace std;

main( ) {

	int produto=1;

	for(int a=2; a<10; a+=2){
		produto=produto*a;
		cout<<a<<"\n";
	}
	cout<<produto<<"\n";
}

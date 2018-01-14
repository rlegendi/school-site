package gyak7.zhgyak;

public class MainTest {
	public static void main(final String[] args) {
		int jegy = 1;
		final Stock stock = new Stock();
		
		/*
		 * Legyen meg a program vaza, lehessen uj veteli ajanlatokat felvenni. Mukodjon az equals.
		 */
		jegy += test1( stock );
		
		/*
		 * Uj veteli ajanlatok felvetelenek lehetosege, parosito algoritmus implementalasa.
		 */
		jegy += test2( stock );
		
		/*
		 * Sikeres tranzakciok nyomkovetese.
		 */
		jegy += test3( stock );
		
		/*
		 * Zarolas funkcio ellenorzese.
		 */
		jegy += test4( stock );
		
		System.out.println( "== JEGYED: " + jegy + " ==" );
	}
	
	// ======================================================================================================================
	
	private static int test1(final Stock stock) {
		stock.newSellingOffer( "A", 10, 1000 ); // nev, mennyiseg, ar
		stock.newSellingOffer( "A", 30, 1500 ); // nem lehet, ugyanaz az ajanlo
		
		stock.newSellingOffer( "B", 4, 2000 );
		stock.newSellingOffer( "C", 5, 2500 );
		stock.newSellingOffer( "D", 11, 10000 );
		stock.newSellingOffer( "E", 30, 1500 );
		
		// Ha nincs, adjon vissza ures karakterlancot!
		final String offersString = stock.listOffers();
		System.out.println( "Lista:" );
		System.out.println( offersString );
		
		return ( offersString.length() > 0 ) ? 1 : 0;
	}
	
	private static int test2(final Stock stock) {
		if ( 0 == stock.listOffers().length() || test1( stock ) != 1 ) {
			return 0;
		}
		
		stock.newBuyingOffer( "X", 30 ); // nev, mennyiseg
		stock.newBuyingOffer( "X", 1 ); // nem lehet, ugyanaz az ajanlo
		
		stock.newBuyingOffer( "Y", 5 );
		stock.newBuyingOffer( "Z", 11 );
		stock.newBuyingOffer( "V", 4 );
		stock.newBuyingOffer( "W", 10 );
		
		// A veteli, eladasi ajanlatok pontosan kiegyenlitik egymast.
		final String offersString = stock.listOffers();
		System.out.println( "Lista:" );
		System.out.println( offersString );
		return ( 0 == offersString.length() ) ? 1 : 0;
	}
	
	private static int test3(final Stock stock) {
		if ( test2( stock ) != 1 ) {
			return 0;
		}
		
		// Ha nincs, adjon vissza ures karakterlancot!
		final String transactions = stock.listSuccessfulTransactions();
		System.out.println( "Transactions:" );
		System.out.println( transactions );
		
		// Letrejott pontosan 5 tranzakcio, ennek latszodnia kell 
		return ( transactions.length() > 0 ) ? 1 : 0;
	}
	
	private static int test4(final Stock stock) {
		if ( test2( stock ) != 1 ) {
			return 0;
		}
		
		// A teszthez nem lehet ervenyben jelenlegi ajanlat
		if ( stock.listOffers().length() > 0 ) {
			return 0;
		}
		
		stock.lockStock(); // Zarolas
		
		// Uj ajanlatok felvetele: ezekre hibauzenetet kell adnunk, es nem johet letre uj ajanlat
		stock.newBuyingOffer( "I", 5 );
		stock.newSellingOffer( "J", 10, 500 );
		
		return ( 0 == stock.listOffers().length() ) ? 1 : 0;
	}
}

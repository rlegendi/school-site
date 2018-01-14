package media;

import java.util.Arrays;
import java.util.Collection;
import java.util.Collections;
import java.util.List;

import media.data.Book;
import media.data.DVD;
import media.data.Newspaper;
import media.data.Rating;

/**
 * Csak az egyertelmuseg vegett: az alabbi publikus szolgaltatasokat kell nyujtania az altalatok keszitett alkalmazasnak.
 */
interface IMediaManager {
	
	/**
	 * Megadja a nyilvantartott ertekelesek szamat.
	 */
	public int getRatingsNumber();
	
	/**
	 * Megadja a nyilvantartott ertekeleseket egy tetszoleges adatszerkezetben.
	 */
	public Collection<Rating> getRatings();
	
	/**
	 * Uj ertekeles hozzaadasa.
	 */
	public void addRating(final Rating rating);
	
	/**
	 * Adott id alapjan beazonositott ertekeleshez tartozo pontszam modositasa.
	 */
	public void modifyRating(final long id, final int score);
	
	/**
	 * Adott id alapjan beazonositott ertekeles torlese.
	 */
	public void deleteRating(final long id);
	
	/**
	 * Megadja a legrosszabb rogzitett ertekelest.
	 */
	public Rating getWorstRating();
	
	/**
	 * Megadja a legjobb rogzitett ertekelest.
	 */
	public Rating getBestRating();
	
}

public class MediaTest {
	private static void testEquals() {
		// Object referenciakat hasznalunk, hogy ellenorizni tudjuk a feluldefinialas helyesseget
		final Object a = new Rating( 1, new Book( "Dragon Age: The Stolen Throne", 100 * 1000, "David Gaider" ), 3 );
		final Object b = new Rating( 1, new Newspaper( "The New York Times", 1039031, "Bill Keller" ), 4 );
		// IMDB worst movie ever :-)
		final Object c = new Rating( 1, new DVD( "Superbabies: Baby Geniuses 2", 12 * 1295, "Bob Clark" ), 1 );
		
		if ( a.equals( a ) && // reflexivitas
				a.equals( b ) && b.equals( a ) && // szimmentria
				a.equals( b ) && b.equals( c ) && a.equals( c ) && // tranzitivitas
				! a.equals( null ) ) {
			System.out.println( "[Passed] Function equals() implemented correctly." );
			return;
		}
		
		throw new AssertionError( "The equals implementation is broken." );
	}
	
	private static void testComparable() {
		// @formatter:off
		final List<Rating> ratings = Arrays.asList( new Rating( 1, new Book( "Nehez istennek lenni", 100 * 1000, "A. & B. Sztrugackij" ), 3 ),
				new Rating( 2, new DVD( "The Zombie Diaries", 10 * 1000, "Kevin Gates" ), 2 ),
				new Rating( 3, new Newspaper( "Galaktika", 5000, "Nemeth Attila" ), 5 ) );
		// @formatter:on
		
		Collections.sort( ratings );
		
		if ( 2 == ratings.get( 0 ).getId() && 1 == ratings.get( 1 ).getId() && 3 == ratings.get( 2 ).getId() ) {
			System.out.println( "[Passed] Interface Comparable implemented correctly." );
			return;
		}
		
		throw new AssertionError( "Comparable implementation is broken. Expected IDs are 2, 1, 3, but found actual order of " +
				ratings );
	}
	
	private static void testEnumeration() {
		final IMediaManager media = new Media();
		
		final Rating a = new Rating( 1, new Book( "Title", 10, "author" ), 1 );
		final Rating b = new Rating( 2, new Newspaper( "Title", 10, "editor" ), 1 );
		final Rating c = new Rating( 3, new DVD( "Title", 10, "director" ), 1 );
		
		media.addRating( a );
		media.addRating( b );
		media.addRating( c );
		
		final Collection<Rating> ratings = media.getRatings();
		if ( 3 == media.getRatingsNumber() && ratings.contains( a ) && ratings.contains( b ) && ratings.contains( c ) ) {
			System.out.println( "[Passed] Ratings enumerated correctly." );
			return;
		}
		
		throw new AssertionError( "Expected 3 elements in any order, but found " + ratings );
	}
	
	private static void testAddition() {
		final IMediaManager media = new Media();
		
		if ( media.getRatingsNumber() != 0 ) {
			throw new AssertionError( "Expected no ratings on creation, but the following items were found: " +
					media.getRatings() );
		}
		
		final Rating rating = new Rating( 1, new Book( "Java Concurrency in Practice", 100 * 100, "Brian Goetz et al." ), 5 );
		media.addRating( rating );
		
		if ( media.getRatingsNumber() != 1 ) {
			throw new AssertionError( "Expected one rating pro addition, but the following items were found: " +
					media.getRatings() );
		}
		
		if ( media.getRatings().contains( rating ) ) {
			System.out.println( "[Passed] Addition implemented correctly." );
			return;
		}
		
		throw new AssertionError( "Expected rating " + rating + " to be managed, but was not found in ratings " +
				media.getRatings() );
	}
	
	private static void testModification() {
		final IMediaManager media = new Media();
		
		final Newspaper newspaper = new Newspaper( "The Order of the Stick", 1, "Rich Burlew" );
		final Rating rating = new Rating( 1, newspaper, 4 );
		
		media.addRating( rating );
		
		try {
			media.modifyRating( 1, 10 );
			throw new AssertionError( "Value 10 is not a valid score, should have been checked. Throw an exception for the illegal argument." );
		} catch (final Exception e) {
			// Elvart viselkedes: hibas parameterezes eseten legyen kivetel
		}
		
		media.modifyRating( 1, 5 );
		
		if ( 1 == rating.getId() && 5 == rating.getScore() ) {
			System.out.println( "[Passed] Modification implemented correctly." );
			return;
		}
		
		throw new AssertionError( "Expected modified value of 5, but was " + rating );
	}
	
	private static void testDeletion() {
		final IMediaManager media = new Media();
		
		final Rating a = new Rating( 1, new Book( "Title", 10, "author" ), 1 );
		final Rating b = new Rating( 2, new Newspaper( "Title", 10, "editor" ), 1 );
		final Rating c = new Rating( 3, new DVD( "Title", 10, "director" ), 1 );
		
		media.addRating( a );
		media.addRating( b );
		media.addRating( c );
		
		media.deleteRating( 3 );
		if ( media.getRatingsNumber() != 2 ) {
			throw new AssertionError( "Deletion failed, expected 2 ratings but found " + media.getRatings() );
		}
		
		media.deleteRating( 1 );
		
		if ( media.getRatings().contains( b ) && ! media.getRatings().contains( a ) ) {
			System.out.println( "[Passed] Deletion implemented correctly" );
			return;
		}
		
		throw new AssertionError( "Expected only rating with id = 2, but found " + media.getRatings() );
	}
	
	private static void testMin() {
		final IMediaManager media = new Media();
		
		final Rating a = new Rating( 1, new Book( "Book title", 10, "Book author" ), 3 );
		final Rating b = new Rating( 2, new Newspaper( "Newspaper title", 10, "Newspaper editor" ), 4 );
		final Rating c = new Rating( 3, new DVD( "DVD title", 10, "DVD director" ), 2 );
		
		media.addRating( a );
		media.addRating( b );
		media.addRating( c );
		
		final Rating worstRating = media.getWorstRating();
		if ( worstRating.equals( c ) ) {
			System.out.println( "[Passed] Finding worst rating implemented correctly." );
			return;
		}
		
		throw new AssertionError( "Expected rating " + b + " to be the worst, but found " + worstRating );
	}
	
	private static void testMax() {
		final IMediaManager media = new Media();
		
		final Rating a = new Rating( 1, new Book( "Book title", 10, "Book author" ), 3 );
		final Rating b = new Rating( 2, new Newspaper( "Newspaper title", 10, "Newspaper editor" ), 4 );
		final Rating c = new Rating( 3, new DVD( "DVD title", 10, "DVD director" ), 2 );
		
		media.addRating( a );
		media.addRating( b );
		media.addRating( c );
		
		final Rating bestRating = media.getBestRating();
		if ( bestRating.equals( b ) ) {
			System.out.println( "[Passed] Finding worst rating implemented correctly." );
			return;
		}
		
		throw new AssertionError( "Expected rating " + b + " to be the worst, but found " + bestRating );
	}
	
	public static void main(final String[] args) {
		testEquals();
		testComparable();
		testEnumeration();
		testAddition();
		testModification();
		testDeletion();
		testMin();
		testMax();
		
		System.out.println();
		System.out.println( "======================================" );
		System.out.println( "Passed all of tests, solution accepted" );
		System.out.println( "======================================" );
	}
}

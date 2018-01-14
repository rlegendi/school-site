package numbers.test;

import java.util.Arrays;

import numbers.Classifier;
import numbers.common.Utils;

/**
 * @author rlegendi
 */
public class TestClassifier {
	private static int ctr = 0;
	private static final int MAX_CTR = 155;
	
	private static void check(final boolean passed, final String msg) {
		if ( ! passed ) {
			System.out.printf( "[FAILURE] Reason: %s%n", msg );
			System.exit( 1 );
		}
		
		ctr++;
		
		final StringBuilder progressBar = new StringBuilder();
		final int scale = 5;
		
		for (int i = 0; i < ctr / scale; ++i) {
			progressBar.append( "=" );
		}
		
		for (int i = ctr / scale; i < MAX_CTR / scale; ++i) {
			progressBar.append( " " );
		}
		
		System.out.printf( "[PASSED] %3d/%d [%s]%n", ctr, MAX_CTR, progressBar );
	}
	
	private static void testUtils() {
		check( 0 == Utils.sum( new int[0] ), "Sum of empty array should be 0." );
		
		check( 0 == Utils.sum( new int[] {
				1, - 1
		} ), "1 + (-1) != 0" );
		
		check( 1 == Utils.sum( new int[] {
				0, 0, 0, 1
		} ), "0 + ... + 0 + 1 != 1" );
		
		check( 15 == Utils.sum( new int[] {
				1, 2, 3, 4, 5
		} ), "1 + 2 + ... + 5 != 15" );
		
		// Tricky part
		check( 0x108 == Utils.sum( new int[] {
				1, 010, 0xFF
		} ), "1 + 010 + 0xFF != 0x108" );
	}
	
	private static void testCreation() {
		final Classifier oneClassifier = new Classifier( 1 );
		check( 1 == oneClassifier.getNumber(), "Invalid getNumber()." );
		
		final Classifier l33tClassifier = new Classifier( 0xBEEF );
		check( 0xBEEF == l33tClassifier.getNumber(), "Invalid getNumber()." );
	}
	
	private static void testIsFactor() {
		final Classifier sixClassifier = new Classifier( 6 );
		
		check( sixClassifier.isFactor( 1 ), "6 | 1 == 0" );
		check( sixClassifier.isFactor( 2 ), "6 | 2 == 0" );
		check( sixClassifier.isFactor( 3 ), "6 | 3 == 0" );
		check( sixClassifier.isFactor( 6 ), "6 | 6 == 0" );
		
		check( ! sixClassifier.isFactor( 4 ), "6 | 4 == 2" );
		check( ! sixClassifier.isFactor( 5 ), "6 | 5 == 1" );
	}
	
	private static void testNumberOfFactors() {
		final Classifier tenClassifier = new Classifier( 10 );
		check( 4 == tenClassifier.numberOfFactors(), "| factors(10) | != 4" );
		
		final Classifier elevenClassifier = new Classifier( 11 );
		check( 2 == elevenClassifier.numberOfFactors(), "| factors(11) | != 2 (prime)" );
	}
	
	private static void testFactors() {
		check( Arrays.equals( new int[] {
				1, 2, 4, 5, 10, 20
		}, new Classifier( 20 ).getFactors() ), "factors(20) != {1, 2, 4, 5, 10, 20}" );
		
		check( Arrays.equals( new int[] {
				1, 3, 7, 21
		}, new Classifier( 21 ).getFactors() ), "factors(21) != {1, 3, 7, 21}" );
		
		check( Arrays.equals( new int[] {
				1, 2, 11, 22
		}, new Classifier( 22 ).getFactors() ), "factors(22) != {1, 2, 11, 22}" );
		
		check( Arrays.equals( new int[] {
				1, 23
		}, new Classifier( 23 ).getFactors() ), "factors(23) != {1, 23}" );
	}
	
	private static void testUnmodifiableFactors() {
		final Classifier classifier = new Classifier( 25 );
		
		final int[] factors = classifier.getFactors();
		
		check( Arrays.equals( new int[] {
				1, 5, 25
		}, factors ), "factors(25) != 1, 5, 25" );
		
		factors[1] = 50;
		
		check( Arrays.equals( new int[] {
				1, 5, 25
		}, classifier.getFactors() ), "Representation exposed, client may break class invariant." );
	}
	
	private static void testPerfectNumbers() {
		check( new Classifier( 6 ).isPerfect(), "6: perfect" );
		check( new Classifier( 28 ).isPerfect(), "28: perfect" );
		check( new Classifier( 496 ).isPerfect(), "496: perfect" );
		check( new Classifier( 8128 ).isPerfect(), "8128: perfect" );
	}
	
	private static void testAbundantNumbers() {
		// @formatter:off
		final int[] abundants = {014, 022, 024, 030, 036, 044, 050, 052, 060, 066, 070, 074, 0102, 0106, 0110, 0116, 0120,
								 0124, 0130, 0132, 0140, 0144, 0146, 0150, 0154, 0160, 0162, 0170, 0176, 0204, 0212, 0214,
								 0220, 0226, 0234, 0240, 0242, 0250, 0256, 0260, 0264, 0272, 0300, 0304, 0306, 0310, 0314,
								 0320, 0322, 0330, 0334, 0336, 0340, 0344, 0352, 0360, 0366, 0374, 0402, 0404, 0410, 0416};
		// @formatter:on
		
		for (final int act : abundants) {
			check( new Classifier( act ).isAbundant(), act + ": abundant" );
		}
	}
	
	private static void testDeficientNumbers() {
		// @formatter:off
		final int[] deficients = {01, 02, 03, 04, 05, 07, 010, 011, 012, 013, 015, 016, 017, 020, 021, 023, 025, 026, 027,
								  031, 032, 033, 035, 037, 040, 041, 042, 043, 045, 046, 047, 051, 053, 054, 055, 056, 057,
								  061, 062, 063, 064, 065, 067, 071, 072, 073, 075, 076, 077, 0100, 0101, 0103, 0104, 0105,
								  0107, 0111, 0112, 0113, 0114, 0115, 0117, 0121, 0122, 0123, 0125, 0126};
		// @formatter:on
		
		for (final int act : deficients) {
			check( new Classifier( act ).isDeficient(), act + ": deficient" );
		}
	}
	
	private static void testStaticUtilityFunction() {
		check( Classifier.isPerfect( 33550336 ), "33550336: perfect" );
		check( ! Classifier.isPerfect( 33550337 ), "33550337: !perfect" );
	}
	
	public static void main(final String[] args) {
		testUtils(); // Pre-condition: sum should work
		testCreation();
		testIsFactor();
		testNumberOfFactors();
		testFactors();
		testUnmodifiableFactors();
		testPerfectNumbers();
		testDeficientNumbers();
		testAbundantNumbers();
		testStaticUtilityFunction();
		
		System.out.println();
		System.out.println( "===============" );
		System.out.println( "=== SUCCESS ===" );
		System.out.println( "===============" );
	}
	
}

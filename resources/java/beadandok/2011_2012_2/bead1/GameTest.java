package wumpus;

import static wumpus.Constants.N;

import java.lang.reflect.InvocationTargetException;
import java.lang.reflect.Method;
import java.util.Arrays;
import java.util.Collections;
import java.util.HashSet;
import java.util.Set;

import wumpus.gameobjects.Pit;
import wumpus.gameobjects.Player;
import wumpus.gameobjects.Treasure;
import wumpus.gameobjects.Wumpus;

public class GameTest {
	
	private int ctr = 0;
	
	public void testPitProperties() {
		final GameObject obj = new Pit();
		assertThat( obj.isBreezy() );
		assertThat( ! obj.isSmelly() );
		assertThat( ! obj.isGloomy() );
	}
	
	public void testPlayerProperties() {
		final GameObject obj = new Player();
		assertThat( ! obj.isBreezy() );
		assertThat( ! obj.isSmelly() );
		assertThat( ! obj.isGloomy() );
	}
	
	public void testTreasureProperties() {
		final GameObject obj = new Treasure();
		assertThat( ! obj.isBreezy() );
		assertThat( ! obj.isSmelly() );
		assertThat( obj.isGloomy() );
	}
	
	public void testWumpusProperties() {
		final GameObject obj = new Wumpus();
		assertThat( ! obj.isBreezy() );
		assertThat( obj.isSmelly() );
		assertThat( ! obj.isGloomy() );
	}
	
	public void testDisplayChars() {
		assertThat( 'P' == new Pit().getDisplay() );
		assertThat( '@' == new Player().getDisplay() );
		assertThat( 'T' == new Treasure().getDisplay() );
		assertThat( 'W' == new Wumpus().getDisplay() );
	}
	
	public void testNextTo() {
		assertNextTo( new Player(), new Pit() );
		assertNextTo( new Player(), new Treasure() );
		assertNextTo( new Wumpus(), new Player() );
	}
	
	private void assertNextTo(final GameObject lhs, final GameObject rhs) {
		lhs.setPosition( new Position( 1, 1 ) );
		rhs.setPosition( new Position( 1, 1 ) );
		
		assertThat( lhs.isNextTo( rhs ) );
	}
	
	public void testPositionEqualsAndHashCode() {
		final Set<Position> set = new HashSet<Position>();
		
		set.add( new Position( 1, 1 ) );
		set.add( new Position( 1, 2 ) );
		set.add( new Position( 2, 1 ) );
		
		set.add( new Position( 1, 2 ) );
		set.add( new Position( 2, 1 ) );
		
		assertThat( 3 == set.size() );
	}
	
	public void testNeighbourhood() {
		assertProperCoordinatesReturned( new Position( 0, 0 ), new Position( 0, 1 ), new Position( 1, 0 ) );
		assertProperCoordinatesReturned( new Position( N - 1, N - 1 ), new Position( N - 1, N - 2 ), new Position( N - 2,
				N - 1 ) );
		assertProperCoordinatesReturned( new Position( 3, 3 ), new Position( 2, 3 ), new Position( 3, 2 ), new Position( 4,
				3 ), new Position( 3, 4 ) );
	}
	
	private void assertProperCoordinatesReturned(final Position base, final Position... expectedPositions) {
		final Set<Position> actual = base.getNeighborhood();
		final Set<Position> expected = new HashSet<Position>();
		
		for (final Position act : expectedPositions) {
			expected.add( act );
		}
		
		assertThat( actual.equals( expected ) );
	}
	
	public void testRandomMovementPosition() {
		final Position pos = new Position( 3, 3 );
		final Position newPos = pos.randomize();
		
		assertThat( Math.abs( pos.getX() - newPos.getX() ) <= 1 && Math.abs( pos.getY() - newPos.getY() ) <= 1 );
	}
	
	public void testPositionShifting() {
		final Position pos = new Position( 3, 3 );
		
		assertThat( pos.shift( Direction.NORTH ).equals( new Position( 3, 2 ) ) );
		assertThat( pos.shift( Direction.SOUTH ).equals( new Position( 3, 4 ) ) );
		assertThat( pos.shift( Direction.EAST ).equals( new Position( 4, 3 ) ) );
		assertThat( pos.shift( Direction.WEST ).equals( new Position( 2, 3 ) ) );
	}
	
	public void testAddingPitToTile() {
		final Tile tile = new Tile();
		
		assertThat( tile.isEmpty() );
		assertThat( ! tile.hasBreezyObject() );
		
		tile.addObject( new Pit() );
		assertThat( tile.hasBreezyObject() );
	}
	
	public void testAddingTreasureToTile() {
		final Tile tile = new Tile();
		
		assertThat( tile.isEmpty() );
		assertThat( ! tile.hasGloomyObject() );
		
		tile.addObject( new Treasure() );
		assertThat( tile.hasGloomyObject() );
	}
	
	public void testAddingWumusToTile() {
		final Tile tile = new Tile();
		
		assertThat( tile.isEmpty() );
		assertThat( ! tile.hasSmellyObject() );
		
		tile.addObject( new Wumpus() );
		assertThat( tile.hasSmellyObject() );
	}
	
	public void testAddRemovePlayerFromTile() {
		final Tile tile = new Tile();
		assertThat( tile.isEmpty() );
		
		final Player player = new Player();
		tile.addObject( player );
		assertThat( ! tile.isEmpty() );
		
		tile.removeObject( player );
		assertThat( tile.isEmpty() );
	}
	
	public void testPlayerMovementToWumpus() {
		final World world = new World( new Position( 3, 3 ),
				new Position( 3, 2 ),
				new Position( 0, 0 ),
				Collections.<Position> emptyList() );
		world.movePlayer( Direction.NORTH );
		assertThat( world.hasWumpusFoundPlayer() );
	}
	
	public void testPlayerMovementToTreasure() {
		final World world = new World( new Position( 2, 2 ),
				new Position( 0, 0 ),
				new Position( 3, 2 ),
				Collections.<Position> emptyList() );
		world.movePlayer( Direction.EAST );
		assertThat( world.hasPlayerFoundTreasure() );
	}
	
	public void testPlayerMovementToPit() {
		final World world = new World( new Position( 1, 1 ),
				new Position( 2, 2 ),
				new Position( 3, 3 ),
				Arrays.asList( new Position( 1, 2 ) ) );
		world.movePlayer( Direction.SOUTH );
		assertThat( world.hasPlayerFellIntoPit() );
	}
	
	public void testEmptyPlayerPerception() {
		final World world = new World( new Position( 0, 0 ),
				new Position( 3, 1 ),
				new Position( 3, 2 ),
				Collections.<Position> emptyList() );
		
		assertThat( ! world.playerPerception().isBreezy() );
		assertThat( ! world.playerPerception().isGloomy() );
		assertThat( ! world.playerPerception().isSmelly() );
	}
	
	public void testFullPlayerPerception() {
		final World world = new World( new Position( 3, 3 ),
				new Position( 3, 2 ),
				new Position( 3, 4 ),
				Arrays.asList( new Position( 2, 3 ) ) );
		
		assertThat( world.playerPerception().isBreezy() );
		assertThat( world.playerPerception().isGloomy() );
		assertThat( world.playerPerception().isSmelly() );
	}
	
	public void testWorldToString() {
		final World world = new World( new Position( 1, 1 ),
				new Position( 3, 1 ),
				new Position( 3, 3 ),
				Arrays.asList( new Position( 1, 3 ) ) );
		
		// @formatter:off
		final String expected =
				"....." + Constants.EOL +
				".@.P." + Constants.EOL +
				"....." + Constants.EOL +
				".W.T." + Constants.EOL +
				".....";
		// @formatter:on
		
		assertThat( world.toString().equals( expected ) );
	}
	
	// ======================================================================================================================
	
	private void assertThat(final boolean assertion) {
		if ( ! assertion ) {
			throw new AssertionError();
		}
		
		System.out.println( ctr++ + ": PASS" );
	}
	
	public static void main(final String[] args)
			throws IllegalAccessException, IllegalArgumentException, InvocationTargetException {
		final GameTest testSuit = new GameTest();
		for (final Method test : testSuit.getClass().getMethods()) {
			if ( test.getName().startsWith( "test" ) ) {
				test.invoke( testSuit );
			}
		}
		
		final String msg = testSuit.ctr + " tests were successful";
		System.out.println( msg.replaceAll( ".", "=" ) );
		System.out.println( msg );
	}
}

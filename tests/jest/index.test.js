/**
 * @jest-environment jsdom
 */

import { getBlockType, unregisterBlockType } from '@wordpress/blocks';
import '../../src/index.js'; // Adjust path as needed

describe( 'multilingual-wp4devs block', () => {
	it( 'should register the block type', () => {
		const block = getBlockType( 'lloc/multilingual-wp4devs' );
		expect( block ).toBeDefined();
		expect( block.title ).toBe( 'Simple Block' );
		expect( typeof block.edit ).toBe( 'function' );
		expect( typeof block.save ).toBe( 'function' );
	} );

	afterAll( () => {
		unregisterBlockType( 'lloc/multilingual-wp4devs' );
	} );
} );
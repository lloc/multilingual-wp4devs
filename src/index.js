import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'lloc/multilingual-wp4devs', {
	apiVersion: 3,
	title: __( 'Simple Block', 'multilingual-wp4devs' ),
	category: 'widgets',

	edit: () => {
		return <p>{ __( 'Hello Editor', 'multilingual-wp4devs' ) }</p>;
	},

	save: () => {
		return <p>{ __( 'Dear Reader', 'multilingual-wp4devs' ) }</p>;
	},
} );

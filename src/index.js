import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType(
    'lloc/multilingual-wp4devs',
    {
        apiVersion: 3,
        title: __('Demo Block', 'multilingual-wp4devs'),
        category: 'widgets',
        edit: () => {
            const blockProps = useBlockProps({ style: { color: '#9fca28' } });

            return < p { ...blockProps } > { __('Demo Block - Multilingual WordPress for developers', 'multilingual-wp4devs') } < / p > ;
        },

        save: () => {
            const blockProps = useBlockProps.save({ style: { color: '#9fca28' } });

            return < p { ...blockProps } > { __('Demo Block - Multilingual WordPress for developers', 'multilingual-wp4devs') } < / p > ;
        },
    }
);
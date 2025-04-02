import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';

registerBlockType('lloc/wceu-2025', {
    apiVersion: 3,
    title: __('Demo Block', 'wceu-2025'),
    category: 'widgets',

    edit: () => {
        const blockProps = useBlockProps({ style: { color: '#9fca28' } });

        return < p { ...blockProps } > { __('Hello WCEU 2025', 'wceu-2025') } < / p > ;
    },

    save: () => {
        const blockProps = useBlockProps.save({ style: { color: '#9fca28' } });

        return < p { ...blockProps } > { __('Hello WCEU 2025', 'wceu-2025') } < / p > ;
    },
});
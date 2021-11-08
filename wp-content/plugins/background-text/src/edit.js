import {
	InnerBlocks,
	useBlockProps
} from '@wordpress/block-editor';

import './editor.scss';

const background_text = [
	['core/heading', {
		className: 'c-title-small--center',
		placeholder: 'タイトル',
		level: 4
	}],
	['core/paragraph', {
		className: 'c-text--white',
		placeholder: '説明入力'
	}],
	['core/image', {}]
]

export default function Edit() {
	const blockProps = useBlockProps();
	return (
		<div { ...blockProps }>
			<InnerBlocks
				template={ background_text }
				templateLock="all"
			/>
		</div>
	);
}

import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import {
	InnerBlocks,
	MediaUpload,
	MediaUploadCheck,
	useBlockProps
} from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './style.scss';
import './editor.scss';

registerBlockType( 'create-block/stack-media-text', {
	attributes: {
		description: {
			type   : 'string',
			default: ''
		},
		mediaID: {
            type: 'number',
			default: 0
        },
        mediaURL: {
            type     : 'string',
            source   : 'attribute',
            selector : 'img',
            attribute: 'src'
        },
		mediaAlt: {
			type     : 'string',
			source   : 'attribute',
			attribute: 'alt',
			selector : 'img'
		}
	},

	edit: ( { attributes, setAttributes } ) => {
		const {
			mediaURL,
			mediaID,
			mediaAlt
		} = attributes;
		const description = [
			[
				"core/paragraph",
				{
					className: "c-text--white",
					placeholder: "説明が入ります。",
				},
			],
		];
		const onSelectImage = ( media ) => {
            setAttributes( {
                mediaURL: media.url,
                mediaID : media.id,
				mediaAlt: media.alt
            } );
        };
		const getImageButton = ( open ) => {
			if(mediaURL) {
				return (
					<img
						src={ mediaURL }
						className="p-stack-contents__image"
						alt={ mediaAlt }
					/>
				);
			}
			else {
				return (
					<div className="button-container">
						<Button
							onClick={ open }
							className="button button-large"
						>
							画像をアップロード
						</Button>
					</div>
				);
			}
		  };
		const removeMedia = () => {
			setAttributes({
				mediaID: 0,
				mediaURL: '',
				mediaAlt: ''
			});
		}
		const blockProps = useBlockProps( {
			className: 'p-stack-contents',
		} );
		return (
			<div { ...blockProps }>
				<MediaUploadCheck>
					<MediaUpload
						onSelect={ onSelectImage }
						allowedTypes={ ['image'] }
						value={ mediaID }
						render={ ({ open }) => getImageButton( open ) }
					/>
				</MediaUploadCheck>
				{ mediaID != 0  &&
					<MediaUploadCheck>
						<Button
						onClick={removeMedia}
						className="button button-large">
						画像を削除
						</Button>
					</MediaUploadCheck>
				}
				<div className="p-stack-contents__description">
					<InnerBlocks template= { description } templateLock="all" />
				</div>
			</div>
		);
	},

	save: ( { attributes } ) => {
		const getImagesSave = (src, alt) => {
			if(!src) return null;
			if(alt) {
				return (
					<img
						className="p-stack-contents__image"
						src={ src }
						alt={ alt }
					/>
				);
			}
			return (
				<img
					className="p-stack-contents__image"
					src={ src }
					alt=""
					aria-hidden="true"
				/>
			);
		};
		const blockProps = useBlockProps.save( {
			className: 'p-stack-contents',
		} );
		return (
				<figure {...blockProps}>
					{ getImagesSave(attributes.mediaURL, attributes.mediaAlt) }
					<div className="p-stack-contents__description">
						<InnerBlocks.Content />
					</div>
				</figure>
		);
	},
} );

import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import {
	TextControl,
	TextareaControl,
} from '@wordpress/components';
import {
	MediaUpload,
	MediaUploadCheck,
	useBlockProps
} from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import './style.scss';
import './editor.scss';

registerBlockType( 'create-block/background-text', {
	attributes: {
		title: {
			type    : 'string',
			source  : 'text',
			selector: 'dt.c-title-small--center',
		},
		description: {
			type    : 'string',
			source  : 'text',
			selector: 'dd.c-text--white',
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
			title,
			description,
			mediaURL,
			mediaID,
			mediaAlt
		} = attributes;
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
						className="image"
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
			className: 'p-contents-card',
		} );
		return (
			<figure { ...blockProps }>
				<dl>
					<TextControl
						placeholder="タイトル"
						value={ title }
						onChange={( value ) => setAttributes( { title: value } )}
					/>
					<TextareaControl
						placeholder="説明"
						value={ description }
						onChange={ ( value ) => setAttributes({ description: value })}
					/>
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
				</dl>
			</figure>
		);
	},

	save: ( { attributes } ) => {
		const getImagesSave = (src, alt) => {
			if(!src) return null;
			if(alt) {
				return (
					<img
						src={ src }
						alt={ alt }
					/>
				);
			}
			return (
				<img
					src={ src }
					alt=""
					aria-hidden="true"
				/>
			);
		};
		const blockProps = useBlockProps.save( {
			className: 'p-contents-card',
		} );
		return (
				<figure {...blockProps}>
					<dl>
						<dt className="c-title-small--center">{ attributes.title }</dt>
						<dd className="c-text--white">{ attributes.description }</dd>
					</dl>
					{ getImagesSave(attributes.mediaURL, attributes.mediaAlt) }
				</figure>
		);
	},
} );

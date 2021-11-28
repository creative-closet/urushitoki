import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import {
	InnerBlocks,
	RichText,
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
			type   : 'string',
			default: ''
		},
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
			title,
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
					<dt className="p-contents-card__title">
						<RichText
							tagName                = "h4"
							className              = "c-title-small--center"
							placeholder            = "タイトルが入ります。"
							keepPlaceholderOnFocus = { true }
							value                  = { title }
							onChange               = { ( newTitle ) => setAttributes({ title: newTitle })}
						/>
					</dt>
					<dd className="p-contents-card__text">
						<InnerBlocks template= { description } templateLock="all" />
					</dd>
					<dd className="p-contents-card__image">
						<MediaUploadCheck>
							<MediaUpload
								onSelect     = { onSelectImage }
								allowedTypes = { ['image'] }
								value        = { mediaID }
								render       = { ({ open }) => getImageButton( open ) }
							/>
						</MediaUploadCheck>
					</dd>
					<dd>
						{ mediaID != 0  &&
							<MediaUploadCheck>
								<Button
								onClick   = {removeMedia}
								className = "button button-large">
								画像を削除
								</Button>
							</MediaUploadCheck>
						}
					</dd>
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
						<dt className="p-contents-card__title">
							<RichText.Content
								tagName   = "h4"
								className = "c-title-small--center"
								value     = { attributes.title }
							/>
						</dt>
						<dd className="p-contents-card__text">
							<InnerBlocks.Content />
						</dd>
						<dd className="p-contents-card__image">
							{ getImagesSave(attributes.mediaURL, attributes.mediaAlt) }
						</dd>
					</dl>
				</figure>
		);
	},
} );

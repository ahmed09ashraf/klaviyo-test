function cx(...classNames) {
    return classNames.filter(Boolean).join(' ');
}

/*
 onLoad=${() => {
                             const imgEl = document.querySelector(`.${hit.objectID} .aa-ItemPicture`);
                             imgEl.classList.add('aa-ItemPicture--loaded');
                         }}
 */
export function ProductItem({html, hit, components}) {
    return html`
        <a href="${hit.link}" rel="noreferrer noopener"
           class="${cx('aa-ItemLink', hit.objectID)}">
            <div class="aa-ItemContent">
                <div class="aa-ItemPicture">
                    <img src="${hit.image}" alt="${hit.title}" width="40" height="40"/>
                </div>

                <div class="aa-ItemContentBody">
                    <div class="aa-ItemContentTitleWrapper">
                        <div class="aa-ItemContentTitle" >
                            ${hit.title}
                        </div>
                    </div>
                </div>
            </div>
        </a>
    `;
}

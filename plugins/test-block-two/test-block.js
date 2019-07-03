/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

wp.blocks.registerBlockType('robbie/repeater', {
  title: 'Repeater',
  icon: 'smiley',
  category: 'common',
  attributes: {
      items: {
        source: 'query',
        default: [],
        selector: '.item',
        query: {
          title: {
            type: 'string',
            source: 'text',
            selector: '.title'
          },
          index: {
            type: 'number',
            source: 'attribute',
            attribute: 'data-index'
          }
        }
      }
    },

    //The instances will be contained in the “items” attribute, which has the “query” source, and will be an array. Its instances will be populated according to the structure defined in the “query” field. In other words, our array will look like [{title: ‘Some Text’, index: 0}, {title: ‘Some other text’, index: 1} … {…}].


  edit: function (props) {

    let attributes = props.attributes;

    let itemList = attributes.items.sort(function(a, b) { return a.index -b.index; }).map(function(item) {
        return el('div', { className: 'item' },el(RichText, {
          tagName: 'h1',
          placeHolder: "This is where the title is entered",
          value: item.title,
          autoFocus: true,
          onChange: function (value) {   //this function represents the key of the repeater logic
            let newObject = Object.assign({}, item, {
              title: value
            });
            return props.setAttributes({
              items: [].concat(_cloneArray(props.attributes.items.filter(function(itemFilter) {
                return itemFilter.index != item.index;
              })), [newObject])
            });
          }
        }))
    }); // end let itemList
//     return el(
//       'div',
//       { className: props.className },
//       el('div', { className: 'item-list' },
//       itemList,
//     ),
//     el( components.Button, {
//       className: 'button add-row',
//       onClick: function() {
//         return props.setAttributes({
//           items: [].concat(_cloneArray(props.attributes.items), [{
//             index: props.attributes.items.length,
//             title: ""
//           }])
//         });
//       }
//     },
//     'Add Row'
//   )
// );

  },


  save: function( props ) {

    var attributes = props.attributes;

    if (attributes.items.length > 0) {

      var itemList = attributes.items.map(
        function(item) {

          return el(
            'div',
            { className: 'item', 'data-index': item.index },
            el(
              'h1',
              {
              className: 'title',
              },
              item.title)
            )

        }
      );

      return el(
        'div',
        { className: props.className },
        el('div', { className: 'item-list' },itemList)
      );

    }
    else
    {
      return ("FAKA");
    }
  }
});

/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

wp.blocks.registerBlockType('robbie/border-box', {
  title: 'Box Border Color!',
  icon: 'smiley',
  category: 'common',
  attributes: {
    content: {type: 'string'},
    color: {type: 'string'}
  },

/* This configures how the content and color fields will work, and sets up the necessary elements */

  edit: function(props) {
    console.log(props)
    function updateContent(event) {
      props.setAttributes({content: event.target.value})
    }

    function updateColor(value) {
      console.log('test', props)
      props.setAttributes({color: value.hex})
    }
    return wp.element.createElement(
      "div",
      null,
      wp.element.createElement(
        "h3",
        null,
        "Simple Box"
      ),
      wp.element.createElement("input", { type: "text", value: props.attributes.content, onChange: updateContent }),
      wp.element.createElement(wp.components.ColorPicker, { color: props.attributes.color, onChangeComplete: updateColor })
    );
  },
  save: function(props) {

    return wp.element.createElement(
      "h3",
      { style: { border: "10px solid " + props.attributes.color } },
      props.attributes.content
    );
  }
})

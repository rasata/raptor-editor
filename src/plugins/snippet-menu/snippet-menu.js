/**
 * @fileOverview Contains the snippet menu class code.
 * @author  David Neilsen <david@panmedia.co.nz>
 * @author  Michael Robinson <michael@panmedia.co.nz>
 * @author Melissa Richards <melissa@panmedia.co.nz>
 */

/**
 * @class The snippet menu class, This is a test.
 * @constructor
 * @augments SelectMenu
 *
 * @param {Object} options
 */
function SnippetMenu(options) {
    SelectMenu.call(this, {
        name: 'snippetMenu'
    });
}

SnippetMenu.prototype = Object.create(SelectMenu.prototype);

/**
 * Initialize the snippet menu.
 *
 * @returns {Element}
 */
SnippetMenu.prototype.init = function() {
    var result = SelectMenu.prototype.init.call(this);
    if (typeof this.options.snippets !== 'undefined' &&
            Object.keys(this.options.snippets).length > 0) {
        return result;
    }
};

/**
 * Inserts the snippet into the selected text.
 *
 * @todo type for name
 * @param {type} name The name of the snippet.
 */
SnippetMenu.prototype.insertSnippet = function(name) {
    selectionReplace(this.options.snippets[name]);
};

/**
 * Applies the insertion of the snippet.
 *
 * @param {type} event The click event that applies the snippet.
 */
SnippetMenu.prototype.apply = function(event) {
    this.raptor.actionApply(function() {
        this.insertSnippet($(event.currentTarget).data('name'));
    }.bind(this));
};

/**
 * Previews the insertion of a snippet.
 *
 * @param {type} event The mouse event that triggers the preview.
 */
SnippetMenu.prototype.preview = function(event) {
    this.raptor.actionPreview(function() {
        this.insertSnippet($(event.currentTarget).data('name'));
    }.bind(this));
};

/**
 * Removes the preview state.
 */
SnippetMenu.prototype.previewRestore = function() {
    this.raptor.actionPreviewRestore();
};

/**
 * Gets the menu items for the snippet menu.
 *
 * @todo check type for return
 * @returns {Element} The menu items.
 */
SnippetMenu.prototype.getMenuItems = function() {
    var items = '';
    for (var name in this.options.snippets) {
        items += this.raptor.getTemplate('snippet-menu.item', {
            name: name
        });
    }
    return $(items)
        .click(this.apply.bind(this))
        .mouseenter(this.preview.bind(this))
        .mouseleave(this.previewRestore.bind(this));
};


Raptor.registerUi(new SnippetMenu());

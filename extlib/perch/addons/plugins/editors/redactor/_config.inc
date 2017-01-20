<script type="text/javascript" src="PERCH_LOGINPATH/addons/plugins/editors/redactor/redactor.min.js?v=1.2.5"></script>
<link rel="stylesheet" href="PERCH_LOGINPATH/addons/plugins/editors/redactor/perch/edit.css?v=1.2.5" type="text/css" />
<link rel="stylesheet" href="PERCH_LOGINPATH/addons/plugins/editors/redactor/redactor.min.css?v=1.2.5" type="text/css" />
<!-- Custom CSS/JavaScript -->
<script>
    // Define editors config options
    var PerchEditorOptions = {
        redactor: {
            blog: {
                buttons: ['format', 'bold', 'italic', 'lists',
                    'image', 'file', 'link', 'horizontalrule'
                ],
                formatting: ['p', 'subtitle', 'sub-subtitle', 'blockquote'],
                formattingAdd: {
                    'subtitle': {
                        'title': 'Subtitle',
                        'args': ['h3', 'class', 'article__subtitle']
                    },
                    'sub-subtitle': {
                        'title': 'Sub-subtitle',
                        'args': ['h3', 'class', 'article__sub-subtitle']
                    }
                },
                minHeight: 300
            },
            content: {
                buttons: ['format', 'bold', 'italic', 'deleted', 'lists',
                    'image', 'file', 'link', 'horizontalrule'
                ],
                minHeight: 300
            },
            simple: {
                buttons: ['format', 'bold', 'italic', 'lists', 'link'],
                minHeight: 120
            },
            minimal: {
                buttons: ['bold', 'italic', 'link'],
                minHeight: 80
            }
        }
    };
</script>
<script type="text/javascript" charset="utf-8">
    $(function() {
        // Modify Redactor global defaults
        (function() {
            var defaults = {
                imageUpload: 'PERCH_LOGINPATH/addons/plugins/editors/redactor/perch/upload.php?filetype=image',
                fileUpload: 'PERCH_LOGINPATH/addons/plugins/editors/redactor/perch/upload.php',
                cleanStyleOnEnter: true,
                removeComments: true,
                buttonSource: true
            };

            for (var option in defaults)
                $.Redactor.opts[option] = defaults[option];
        })();

        var set_up_redactor = function() {
            $('textarea.redactor:not([data-init])').each(function(i, o) {
                var self = $(o);
                var uploadFields = {
                    'width': self.attr('data-width') || '',
                    'height': self.attr('data-height') || '',
                    'crop': self.attr('data-crop') || '',
                    'quality': self.attr('data-quality') || '',
                    'sharpen': self.attr('data-sharpen') || '',
                    'density': self.attr('data-density') || '',
                    'bucket': self.attr('data-bucket') || 'default'
                };
                var config = {},
                    editorConfig = self.attr('data-editor-config') || null;

                // defined in addons/plugins/ui/_config.inc
                var options = PerchEditorOptions['redactor'] || {};

                if (options.hasOwnProperty(editorConfig)) {
                    config = options[editorConfig];
                }
                config.uploadFileFields = config.uploadImageFields = uploadFields;

                self.wrap('<div class="editor-wrap" style="float:left;"></div>');
                self.redactor(config);
                self.attr('data-init', true);
            });
        };

        set_up_redactor();
        $(window).on('Perch_Init_Editors', function() {
            set_up_redactor();
        });
    });
</script>

<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include __DIR__ . '/../../../src/include.php'; ?>
</head>
<body class="simple">
    <div class="test-1">
        <h1>Insert Footer 1</h1>
        <div class="test-input">
            <div class="editable">
                <table>
                   <thead>
                       <tr>
                           <th>Header</th>
                           <th>Header</th>
                           <th>Header</th>
                           <th>Header</th>
                           <th>Header</th>
                           <th>Header</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td rowspan="2">Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                       </tr>
                       <tr>
                           <td>Cell</td>
                           <td colspan="2">Cell</td>
                           <td rowspan="2">Cell</td>
                           <td>Cell</td>
                       </tr>
                       <tr>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td colspan="2">Cell</td>
                           <td>Cell</td>
                       </tr>
                       <tr>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                       </tr>
                       <tr>
                           <td>Cell</td>
                           <td colspan="2">Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                       </tr>
                       <tr>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                           <td>Cell</td>
                       </tr>
                   </tbody>
               </table>
            </div>
        </div>
        <div class="test-expected">
            <div class="editable">
                <table>
                    <thead>
                        <tr>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                            <th>Header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td rowspan="2">Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td colspan="2">Cell</td>
                            <td rowspan="2">Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td colspan="2">Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td colspan="2">Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Header</th>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            clickButton(input, '.raptor-ui-table-insert-footer-row');
            rangesToTokens(rangy.getSelection().getAllRanges());
        });
    </script>
</body>
</html>


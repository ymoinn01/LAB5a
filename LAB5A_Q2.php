<!DOCTYPE html>
<html>
    <head>
        <title>Students Table</title>
    </head>
    <body>
        <?php
            $students = [
                [
                    'name' => 'Alice',
                    'program' => 'BIP',
                    'age' => 21
                ],
                [
                    'name' => 'Bob',
                    'program' => 'BIS',
                    'age' => 20
                ],
                [
                    'name' => 'Raju',
                    'program' => 'BIT',
                    'age' => 22
                ]
            ];
        ?>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['program']; ?></td>
                    <td><?php echo $student['age']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
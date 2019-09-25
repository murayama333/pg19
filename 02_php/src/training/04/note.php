<?php
define("NOTE_FILE", "note.csv");
define("INPUT_MESSAGE", "Input command > ");
define("COMMAND_ERROR_MESSAGE", "Command Error!" . PHP_EOL);
define("FILE_ERROR_MESSAGE", "File Error!" . PHP_EOL);
define("END_MESSAGE", "Bye!" . PHP_EOL);

function input()
{
  $result = explode(" ", trim(fgets(STDIN)));
  if (feof(STDIN)) {
    return ["quit"];
  }
  return $result;
}

function get_notes()
{
  $fp = @fopen(NOTE_FILE, "r");
  if ($fp === false) {
    die(FILE_ERROR_MESSAGE);
  }
  $notes = [];
  $note = fgetcsv($fp);
  while($note !== false) {
    $notes[] = $note;
    $note = fgetcsv($fp);
  }
  fclose($fp);
  return $notes;
}

function create_note($content)
{
  $notes = get_notes();
  $id = get_new_note_id($notes);
  $notes[] = [$id, $content];
  save_notes($notes);
}

function delete_note($id)
{
  $notes = get_notes();
  $save_notes = [];
  foreach ($notes as $note) {
    if ($id !== $note[0]) {
      $save_notes[] = $note;
    }
  }
  save_notes($save_notes);
}

function update_note($id, $content)
{
  $notes = get_notes();
  $save_notes = [];
  foreach ($notes as $note) {
    if ($id === $note[0]) {
      $save_notes[] = [$id, $content];
    } else {
      $save_notes[] = $note;
    }
  }
  save_notes($save_notes);
}

function get_new_note_id($notes)
{
  $max_id = 0;
  foreach ($notes as $note) {
    if ($max_id < $note[0]) {
      $max_id = $note[0];
    }
  }
  return $max_id + 1;
}

function save_notes($notes)
{
  $fp = @fopen(NOTE_FILE, "w");
  if ($fp === false) {
    die(FILE_ERROR_MESSAGE);
  }
  foreach ($notes as $note) {
    fputcsv($fp, $note);
  }
  fclose($fp);
}

while (true) {
  echo INPUT_MESSAGE;
  $commands = input();
  if (count($commands) == 0) {
    echo COMMAND_ERROR_MESSAGE;
    continue;
  }

 if ($commands[0] === "list") {
    if (count($commands) !== 1) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    $notes = get_notes();
    foreach ($notes as $note) {
      echo $note[0] . ":" . $note[1] . PHP_EOL;
    }
  } else if ($commands[0] === "create") {
    if (count($commands) !== 2) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    create_note($commands[1]);
  } else if ($commands[0] === "delete") {
    if (count($commands) !== 2) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    delete_note($commands[1]);
  } else if ($commands[0] === "update") {
    if (count($commands) !== 3) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    update_note($commands[1], $commands[2]);
  } else if ($commands[0] === "quit") {
      if (count($commands) !== 1) {
        echo COMMAND_ERROR_MESSAGE;
        continue;
      }
      echo END_MESSAGE;
      break;
  } else {
    echo COMMAND_ERROR_MESSAGE;
    continue;
  }
}

<?php
define("NOTE_FILE", "note.csv");
define("INPUT_MESSAGE", "Input command > ");
define("COMMAND_ERROR_MESSAGE", "Command Error!" . PHP_EOL);
define("FILE_ERROR_MESSAGE", "File Error!" . PHP_EOL);
define("END_MESSAGE", "Bye!" . PHP_EOL);
define("CONFIRM_MESSAGE", "Are you sure? (yes) > ");

function input()
{
  $result = explode(" ", trim(fgets(STDIN)));
  if (feof(STDIN)) {
    return ["quit"];
  }
  return $result;
}

function get_notes($reverse=false)
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
  if ($reverse) {
    $notes = array_reverse($notes);
  }
  return $notes;
}

function create_note($content)
{
  $notes = get_notes();
  $id = get_new_note_id($notes);
  $date = date("Y-m-d H:i:s");
  $notes[] = [$id, $content, $date];
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
      $date = date("Y-m-d H:i:s");
      $save_notes[] = [$id, $content, $date];
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

 if ($commands[0] === "list" || $commands[0] === "l") {
    if (count($commands) > 2
        || (count($commands) === 2 && $commands[1] !== "reverse")) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    $reverse = count($commands) === 2 && $commands[1] === "reverse";
    $notes = get_notes($reverse);
    foreach ($notes as $note) {
      echo $note[0] . ":" . $note[1] . " (" . $note[2] . ")" . PHP_EOL;
    }
  } else if ($commands[0] === "create" || $commands[0] === "c") {
    if (count($commands) < 2) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    $content = implode(" ", array_slice($commands, 1));
    create_note($content);
  } else if ($commands[0] === "delete" || $commands[0] === "d") {
    if (count($commands) !== 2) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    echo CONFIRM_MESSAGE;
    $confirm = input();
    if (count($confirm) !== 1 || $confirm[0] !== "yes") {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    delete_note($commands[1]);
  } else if ($commands[0] === "update" || $commands[0] === "u") {
    if (count($commands) < 3) {
      echo COMMAND_ERROR_MESSAGE;
      continue;
    }
    $content = implode(" ", array_slice($commands, 2));
    update_note($commands[1], $content);
  } else if ($commands[0] === "quit" || $commands[0] === "q") {
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

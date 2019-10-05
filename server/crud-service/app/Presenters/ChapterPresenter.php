<?php


namespace App\Presenters;


class ChapterPresenter
{
      public function allChapters($chapters)
      {
            $formattedChapters = [];
            foreach ($chapters as $chapter) {
                  $formattedChapters[] = [
                      "id" => $chapter->id,
                      "name" => $chapter->name,
                      "subject" => $chapter->subject->name,
                      "subject_id" => $chapter->subject->id
                  ];
            }

            return $formattedChapters;
      }
}

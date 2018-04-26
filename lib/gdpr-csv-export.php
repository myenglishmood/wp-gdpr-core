<?php

namespace wp_gdpr\lib;

class Gdpr_Csv_Export {

	private $headers;

	private $body;

	private $filename;

	public function __construct( $headers, $body, $filename ) {
		$this->headers  = $headers;
		$this->body     = $body;
		$this->filename = $filename;
	}

	public function export() {
		// output headers so that the file is downloaded rather than displayed
		header( 'Content-Type: text/csv; charset=utf-8' );
		header( 'Content-Disposition: attachment; filename=' . $this->filename . '.csv' );

		// create a file pointer connected to the output stream
		$output = fopen( 'php://output', 'w' );

		// add BOM to fix UTF-8 in Excel
		fputs( $output, $bom = ( chr( 0xEF ) . chr( 0xBB ) . chr( 0xBF ) ) );

		// output the column headings
		fputcsv( $output, $this->headers );

		// output the body
		foreach ( $this->body as $row ) {
			fputcsv( $output, (array) $row );
		}

		fclose( $output );
		die;
	}
}